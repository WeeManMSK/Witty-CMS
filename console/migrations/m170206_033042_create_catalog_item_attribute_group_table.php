<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catalog_item_attribute_group}}`.
 */
class m170206_033042_create_catalog_item_attribute_group_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%catalog_item_attribute_group}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'order' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%catalog_item_attribute_group}}');
    }
}
