<?php

namespace app\modules\testing\models;

use app\models\Result;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "tests".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $passed
 * @property integer $total
 * @property integer $closed
 *
 *
 * @property QuestionsTests[] $questionsTests
 */
class Test extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name'], 'string', 'max' => 500],
            [['passed', 'total', 'closed'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'passed' => 'Сдали',
            'total' => 'Всего',
            'closed' => 'Статус',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getQuestionsTests()
    {
        return $this->hasMany(QuestionsTests::class, ['id_test' => 'id']);
    }

}
