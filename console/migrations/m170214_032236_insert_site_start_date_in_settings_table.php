<?php

use yii\db\Migration;

class m170214_032236_insert_site_start_date_in_settings_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%settings}}', 'site_start_date', $this->date->null());
    }

    public function down()
    {
        $this->dropColumn('{{%settings}}', 'site_start_date');
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
