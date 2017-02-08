<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catalog_item_attribute_mapping}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%catalog_item}}`
 * - `{{%catalog_item_attribute}}`
 */
class m170208_033545_create_catalog_item_attribute_mapping_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%catalog_item_attribute_mapping}}', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer()->notNull(),
            'attribute_id' => $this->integer()->notNull(),
            'value_text' => $this->text()->null(),
            'value_boolean' => $this->boolean()->null(),
        ]);

        // creates index for column `item_id`
        $this->createIndex(
            '{{%idx-catalog_item_attribute_mapping-item_id}}',
            '{{%catalog_item_attribute_mapping}}',
            'item_id'
        );

        // add foreign key for table `{{%catalog_item}}`
        $this->addForeignKey(
            '{{%fk-catalog_item_attribute_mapping-item_id}}',
            '{{%catalog_item_attribute_mapping}}',
            'item_id',
            '{{%catalog_item}}',
            'id',
            'CASCADE'
        );

        // creates index for column `attribute_id`
        $this->createIndex(
            '{{%idx-catalog_item_attribute_mapping-attribute_id}}',
            '{{%catalog_item_attribute_mapping}}',
            'attribute_id'
        );

        // add foreign key for table `{{%catalog_item_attribute}}`
        $this->addForeignKey(
            '{{%fk-catalog_item_attribute_mapping-attribute_id}}',
            '{{%catalog_item_attribute_mapping}}',
            'attribute_id',
            '{{%catalog_item_attribute}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%catalog_item}}`
        $this->dropForeignKey(
            '{{%fk-catalog_item_attribute_mapping-item_id}}',
            '{{%catalog_item_attribute_mapping}}'
        );

        // drops index for column `item_id`
        $this->dropIndex(
            '{{%idx-catalog_item_attribute_mapping-item_id}}',
            '{{%catalog_item_attribute_mapping}}'
        );

        // drops foreign key for table `{{%catalog_item_attribute}}`
        $this->dropForeignKey(
            '{{%fk-catalog_item_attribute_mapping-attribute_id}}',
            '{{%catalog_item_attribute_mapping}}'
        );

        // drops index for column `attribute_id`
        $this->dropIndex(
            '{{%idx-catalog_item_attribute_mapping-attribute_id}}',
            '{{%catalog_item_attribute_mapping}}'
        );

        $this->dropTable('{{%catalog_item_attribute_mapping}}');
    }
}
