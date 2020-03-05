<?php

use yii\db\Migration;

/**
 * Handles the creation of table `briefings`.
 */
class m200302_213949_create_briefings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('briefings', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Название проверки'),
            'date_start' => $this->string()->comment('Дата проведения'),
            'type' => $this->string()->comment('Тип'),
            'section' => $this->string()->comment('Раздел'),
            'user_id' => $this->integer()->comment('Кому назначен'),
            'position_id' => $this->integer()->comment('Категория должностей'),
            'created_at' => $this->integer()->comment('Дата создания'),
            'updated_at' => $this->integer()->comment('Дата обновления'),
        ]);

        // создание реляционной связи на пользователей
        $this->addForeignKey(
            'fk_briefing_user',
            'briefings', 'user_id',
            'users', 'id',
            'cascade'
        );

        $this->addForeignKey(
            'fk_briefing_position',
            'briefings', 'position_id',
            'positions', 'id',
            'cascade'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_briefing_user', 'briefings');
        $this->dropForeignKey('fk_briefing_position', 'briefings');
        $this->dropTable('briefings');
    }
}
