<?php

use yii\db\Migration;

/**
 * Class m200304_112701_add_column_users
 */
class m200304_112701_add_column_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'email', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('users', 'email');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200304_112701_add_column_users cannot be reverted.\n";

        return false;
    }
    */
}
