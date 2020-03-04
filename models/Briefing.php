<?php


namespace app\models;


use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Class Briefing
 * @package app\models
 *
 * @property int $id [int(11)]  Порядковый номер
 * @property string $title [varchar(255)]  Название инструктажа
 * @property string $type [varchar(255)]  Тип
 * @property string $date_start [varchar(255)]  Дата проведения
 * @property int $user_id [int(11)]  Кому назначен
 * @property int $position_id [int(11)]  Категория должностей
 *
 * @property-read User $user
 * @property-read Position $position
 *
 * @property int $created_at [int(11)]
 * @property int $updated_at [int(11)]
 */
class Briefing extends ActiveRecord
{
    public function behaviors()
    {
        return [TimestampBehavior::class,];
    }

    public function attributeLabels()
    {
        return [
            'id' => '#',
            'title' => 'Название проверки',
            'type' => 'Тип проверки',
            'section' => 'Раздел',
            'position_id' => 'Категория должностей',
            'user_id' => 'Кому назначен',
            'date_start' => 'Дата проведения',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата последнего изменения',
        ];
    }

    public static function tableName()
    {
        return 'briefings';
    }

    public function rules()
    {
        return [
            [['title', 'date_start','section',], 'required'],

            [['title','type','section',], 'string'],

            [['title'], 'string', 'min' => 8, 'max' => 160],

            [['date_start',], 'date', 'format' => 'php:Y-m-d'],

            [['user_id', 'position_id'], 'integer'],

        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function getPosition()
    {
        return $this->hasOne(Position::class, ['id' => 'position_id']);
    }
}