<?php


namespace app\controllers;


use app\models\File;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class FileController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                // доступ только для админов
                'class' => AccessControl::class,
                'only' => ['upload', 'update', 'delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $query = File::find();

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'validatePage' => false,
            ],
        ]);

        return $this->render('index', [
            'provider' => $provider,
        ]);
    }

    public function actionView(int $id)
    {
        $item = File::findOne($id);

        // просматривать файлы может любой авторизоанный пользователь
        return $this->render('view', [
            'model' => $item,
        ]);
    }

    public function actionUpload()
    {
//        var_dump();
        $model = new File();

        if (Yii::$app->request->isPost) {
            $model->path = UploadedFile::getInstance($model, 'path');
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                Yii::$app->session->setFlash('success', 'Изображение загружено');
                $model->save();
                return $this->render('view', ['model' => $model]);
            }
        }
        return $this->render('upload', ['model' => $model]);
    }

    public function actionDelete(int $id)
    {
        $item = File::findOne($id);

        // удалять записи может только админ
        if (Yii::$app->user->can('admin')) {
            $item->delete();

            return $this->redirect(['file/index']);
        }

        throw new NotFoundHttpException();
    }
}