<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catalog_item_attribute}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%catalog_item_attribute_group}}`
 * - `{{%catalog_item_attribute_type}}`
 */
class m170206_033124_create_catalog_item_attribute_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%catalog_item_attribute}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'group' => $this->integer()->notNull(),
            'type' => $this->integer()->notNull(),
            'order' => $this->integer()->notNull()->defaultValue(0),
        ]);

        // creates index for column `group`
        $this->createIndex(
            '{{%idx-catalog_item_attribute-group}}',
            '{{%catalog_item_attribute}}',
            'group'
        );

        // add foreign key for table `{{%catalog_item_attribute_group}}`
        $this->addForeignKey(
            '{{%fk-catalog_item_attribute-group}}',
            '{{%catalog_item_attribute}}',
            'group',
            '{{%catalog_item_attribute_group}}',
            'id',
            'CASCADE'
        );

        // creates index for column `type`
        $this->createIndex(
            '{{%idx-catalog_item_attribute-type}}',
            '{{%catalog_item_attribute}}',
            'type'
        );

        // add foreign key for table `{{%catalog_item_attribute_type}}`
        $this->addForeignKey(
            '{{%fk-catalog_item_attribute-type}}',
            '{{%catalog_item_attribute}}',
            'type',
            '{{%catalog_item_attribute_type}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%catalog_item_attribute_group}}`
        $this->dropForeignKey(
            '{{%fk-catalog_item_attribute-group}}',
            '{{%catalog_item_attribute}}'
        );

        // drops index for column `group`
        $this->dropIndex(
            '{{%idx-catalog_item_attribute-group}}',
            '{{%catalog_item_attribute}}'
        );

        // drops foreign key for table `{{%catalog_item_attribute_type}}`
        $this->dropForeignKey(
            '{{%fk-catalog_item_attribute-type}}',
            '{{%catalog_item_attribute}}'
        );

        // drops index for column `type`
        $this->dropIndex(
            '{{%idx-catalog_item_attribute-type}}',
            '{{%catalog_item_attribute}}'
        );

        $this->dropTable('{{%catalog_item_attribute}}');
    }
}
