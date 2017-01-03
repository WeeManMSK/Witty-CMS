<?php

use yii\db\Migration;

class m170103_034552_rename_blog_status_column_at_page_table extends Migration
{
    public function up()
    {
        $this->renameColumn('{{%blog}}', 'status', 'status_id');
    }

    public function down()
    {
        $this->renameColumn('{{%blog}}', 'status_id', 'status');
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
