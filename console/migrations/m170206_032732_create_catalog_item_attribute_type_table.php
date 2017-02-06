<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catalog_items_attribute_type}}`.
 */
class m170206_032732_create_catalog_item_attribute_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%catalog_item_attribute_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%catalog_item_attribute_type}}');
    }
}
