<?php

use yii\db\Migration;

class m170106_182737_alter_created_updated_column_in_blog_table extends Migration
{
    public function up()
    {
        $this->alterColumn('{{%blog}}', 'created_at', $this->integer(11)->notNull());
        $this->alterColumn('{{%blog}}', 'updated_at', $this->integer(11)->null());
    }

    public function down()
    {
        $this->alterColumn('{{%blog}}', 'created_at', $this->dateTime()->notNull());
        $this->alterColumn('{{%blog}}', 'updated_at', $this->dateTime()->null());
    }
}
