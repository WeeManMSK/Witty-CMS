<?php

use yii\db\Migration;

class m170206_033344_insert_attribute_type_values extends Migration
{
    public function up()
    {
        $this->insert('{{%catalog_item_attribute_type}}',[
            'name'=>'Text'
        ]);
        $this->insert('{{%catalog_item_attribute_type}}',[
            'name'=>'Boolean'
        ]);
    }

    public function down()
    {
        $this->delete('{{%catalog_item_attribute_type}}', [
            'name'=>'Text'
        ]);
        $this->delete('{{%catalog_item_attribute_type}}', [
            'name'=>'Boolean'
        ]);

        return false;
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
