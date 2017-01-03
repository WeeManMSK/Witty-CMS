<?php

use yii\db\Migration;

class m170103_035311_insert_blog_statuses extends Migration
{
    public function up()
    {
        $this->insert('{{%blog_status}}',[
           "code"=>'draft',
           'description'=>'Draft'
        ]);

        $this->insert('{{%blog_status}}',[
            'code'=>'moderation',
            'description'=>'Moderation'
        ]);

        $this->insert('{{%blog_status}}',[
            'code'=>'active',
            'description'=>'Active'
        ]);

        $this->insert('{{%blog_status}}',[
            'code'=>'hidden',
            'description'=>'Hidden'
        ]);
    }

    public function down()
    {
        $this->delete('{{%blog_status}}', [
            'code'=>'draft'
        ]);
        $this->delete('{{%blog_status}}', [
            'code'=>'moderation'
        ]);
        $this->delete('{{%blog_status}}', [
            'code'=>'active'
        ]);
        $this->delete('{{%blog_status}}', [
            'code'=>'hidden'
        ]);
    }
}
