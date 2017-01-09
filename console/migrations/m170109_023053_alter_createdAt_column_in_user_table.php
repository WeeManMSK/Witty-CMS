<?php

use yii\db\Migration;

class m170109_023053_alter_createdAt_column_in_user_table extends Migration
{
    public function up()
    {
        $this->renameColumn('{{%user}}', 'createdAt', 'created_at');
    }

    public function down()
    {
        $this->renameColumn('{{%user}}', 'created_at', 'createdAt');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
