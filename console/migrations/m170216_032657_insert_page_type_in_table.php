<?php

use yii\db\Migration;

class m170216_032657_insert_page_type_in_table extends Migration
{ public function up()
{
    $this->insert('{{%page_type}}',[
        'code'=>'Catalog'
    ]);
    $this->insert('{{%page_type}}',[
        'code'=>'Faq'
    ]);
    $this->insert('{{%page_type}}',[
        'code'=>'Blog'
    ]);
}

    public function down()
    {
        $this->delete('{{%page_type}}', [
            'code'=>'Catalog'
        ]);
        $this->delete('{{%page_type}}', [
            'code'=>'Faq'
        ]);
        $this->delete('{{%page_type}}', [
            'code'=>'Blog'
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
