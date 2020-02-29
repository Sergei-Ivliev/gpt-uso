<?php

use yii\db\Migration;

/**
 * Class m200228_184341_add_columns_tests
 */
class m200228_184341_add_columns_tests extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            'tests',
            'passed',
            $this->integer(11)
                ->comment('Сдали')->defaultValue(0)
                ->after('description'));

        $this->addColumn(
            'tests',
            'total',
            $this->integer(11)
                ->comment('Всего')->defaultValue(0)
                ->after('passed'));

        $this->addColumn(
            'tests',
            'closed',
            $this->tinyInteger(1)
                ->comment('Пройден всеми')->defaultValue(0)
                ->after('total'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tests', 'passed');
        $this->dropColumn('tests', 'total');
        $this->dropColumn('tests', 'closed');
    }

}
