<?php

use yii\db\Migration;

class m170109_024055_alter_columns_in_user_table extends Migration
{
    public function up()
    {
        $this->renameColumn('{{%user}}', 'passwordHash', 'password_hash');
        $this->renameColumn('{{%user}}', 'passwordResetToken', 'password_reset_token');
        $this->renameColumn('{{%user}}', 'authKey', 'auth_key');
    }

    public function down()
    {
        $this->renameColumn('{{%user}}', 'password_hash', 'passwordHash');
        $this->renameColumn('{{%user}}', 'password_reset_token', 'passwordResetToken');
        $this->renameColumn('{{%user}}', 'auth_key', 'authKey');
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
