<?php

use yii\db\Migration;

class m170103_040249_set_blog_status_code_as_unique extends Migration
{
    public function up()
    {
        $this->alterColumn("{{%blog_status}}",
            'code',
            $this->string()->notNull()->unique()
        );
    }

    public function down()
    {
        $this->alterColumn("{{%blog_status}}",
            'code',
            $this->string()->notNull()
        );
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
