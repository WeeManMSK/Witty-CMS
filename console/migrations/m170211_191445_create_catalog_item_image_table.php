<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catalog_item_image}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%catalog_item}}`
 */
class m170211_191445_create_catalog_item_image_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%catalog_item_image}}', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer()->notNull(),
            'title' => $this->string(255)->notNull(),
            'image_url' => $this->string(400)->notNull(),
            'order' => $this->integer()->notNull()->defaultValue(0),
        ]);

        // creates index for column `item_id`
        $this->createIndex(
            '{{%idx-catalog_item_image-item_id}}',
            '{{%catalog_item_image}}',
            'item_id'
        );

        // add foreign key for table `{{%catalog_item}}`
        $this->addForeignKey(
            '{{%fk-catalog_item_image-item_id}}',
            '{{%catalog_item_image}}',
            'item_id',
            '{{%catalog_item}}',
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
            '{{%fk-catalog_item_image-item_id}}',
            '{{%catalog_item_image}}'
        );

        // drops index for column `item_id`
        $this->dropIndex(
            '{{%idx-catalog_item_image-item_id}}',
            '{{%catalog_item_image}}'
        );

        $this->dropTable('{{%catalog_item_image}}');
    }
}
