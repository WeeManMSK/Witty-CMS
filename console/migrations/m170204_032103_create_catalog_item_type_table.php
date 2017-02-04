<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catalog_item_type}}`.
 */
class m170204_032103_create_catalog_item_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%catalog_item_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'is_deleted' => $this->boolean()->defaultValue(0)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%catalog_item_type}}');
    }
}
