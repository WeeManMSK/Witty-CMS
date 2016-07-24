<?php

use yii\db\Migration;

class m160724_051915_add_admin_login extends Migration
{
    public function up()
    {
        $this->insert("{{%user}}", [
            "username"=>'admin',
            "authKey" => '8k5IvgiRwYwZN8PdYmrcQ-Jk2bejUn0M',
            "passwordHash" => '$2y$13$DfkJBBDe5qXlHQ50ZgSEWe5pGOvunKJwPW2LIcG9dmE0mxhP/eR2m',
            "roleId" => "3",
        ]);
    }

    public function down()
    {
        $this->delete("{{%user}}", [
            "username" => "admin"
        ]);
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
