<?php

use yii\db\Migration;

class m170214_030704_insert_site_name_in_settings_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%settings}}', 'site_name', $this->string(255)->null());
    }

    public function down()
    {
        $this->dropColumn('{{%settings}}', 'site_name');
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
