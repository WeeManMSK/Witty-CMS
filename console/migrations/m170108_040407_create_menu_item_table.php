<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu_item}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%menu}}`
 * - `{{%menu_item}}`
 */
class m170108_040407_create_menu_item_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%menu_item}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'subtitle' => $this->string(100)->null(),
            'menu_id' => $this->integer()->notNull(),
            'parent_id' => $this->integer()->null(),
            'is_visible' => $this->boolean()->notNull()->defaultValue(0),
            'item_order' => $this->integer()->defaultValue(1000),
        ]);

        // creates index for column `menu_id`
        $this->createIndex(
            '{{%idx-menu_item-menu_id}}',
            '{{%menu_item}}',
            'menu_id'
        );

        // add foreign key for table `{{%menu}}`
        $this->addForeignKey(
            '{{%fk-menu_item-menu_id}}',
            '{{%menu_item}}',
            'menu_id',
            '{{%menu}}',
            'id',
            'CASCADE'
        );

        // creates index for column `parent_id`
        $this->createIndex(
            '{{%idx-menu_item-parent_id}}',
            '{{%menu_item}}',
            'parent_id'
        );

        // add foreign key for table `{{%menu_item}}`
        $this->addForeignKey(
            '{{%fk-menu_item-parent_id}}',
            '{{%menu_item}}',
            'parent_id',
            '{{%menu_item}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%menu}}`
        $this->dropForeignKey(
            '{{%fk-menu_item-menu_id}}',
            '{{%menu_item}}'
        );

        // drops index for column `menu_id`
        $this->dropIndex(
            '{{%idx-menu_item-menu_id}}',
            '{{%menu_item}}'
        );

        // drops foreign key for table `{{%menu_item}}`
        $this->dropForeignKey(
            '{{%fk-menu_item-parent_id}}',
            '{{%menu_item}}'
        );

        // drops index for column `parent_id`
        $this->dropIndex(
            '{{%idx-menu_item-parent_id}}',
            '{{%menu_item}}'
        );

        $this->dropTable('{{%menu_item}}');
    }
}
