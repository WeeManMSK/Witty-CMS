<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catalog_item}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%catalog_item_type}}`
 */
class m170204_050135_create_catalog_item_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%catalog_item}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text()->null(),
            'description_full' => $this->text()->null(),
            'type_id' => $this->integer()->notNull(),
            'is_deleted' => $this->boolean()->notNull()->defaultValue(0),
        ]);

        // creates index for column `type_id`
        $this->createIndex(
            '{{%idx-catalog_item-type_id}}',
            '{{%catalog_item}}',
            'type_id'
        );

        // add foreign key for table `{{%catalog_item_type}}`
        $this->addForeignKey(
            '{{%fk-catalog_item-type_id}}',
            '{{%catalog_item}}',
            'type_id',
            '{{%catalog_item_type}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%catalog_item_type}}`
        $this->dropForeignKey(
            '{{%fk-catalog_item-type_id}}',
            '{{%catalog_item}}'
        );

        // drops index for column `type_id`
        $this->dropIndex(
            '{{%idx-catalog_item-type_id}}',
            '{{%catalog_item}}'
        );

        $this->dropTable('{{%catalog_item}}');
    }
}
