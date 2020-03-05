<?php


namespace app\components;

use skeeks\yii2\mobiledetect\MobileDetect;
use Yii;
use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\base\Theme;
use yii\web\Application;

class AppComponent extends Component implements BootstrapInterface
{
    public function bootstrap($app)
    {
        Yii::$app->on(Application::EVENT_BEFORE_REQUEST, function()
        {
            //Если это мобильный телефон
            if (\Yii::$app->mobileDetect->isMobile())
            {
                //определение пути к папке с шаблоном
                \Yii::$app->view->theme = new Theme([
                    'pathMap' =>
                        [
                            '@app/views' =>
                                [
                                    '@app/mobile',
                                ],
                        ]
                ]);
            }
        });
    }
}