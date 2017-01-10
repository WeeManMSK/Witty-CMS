<?php

use yii\db\Migration;

/**
 * Handles adding page_id to table `{{%menu_item}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%page}}`
 */
class m170110_041828_add_page_id_column_to_menu_item_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%menu_item}}', 'page_id', $this->integer()->null());

        // creates index for column `page_id`
        $this->createIndex(
            '{{%idx-menu_item-page_id}}',
            '{{%menu_item}}',
            'page_id'
        );

        // add foreign key for table `{{%page}}`
        $this->addForeignKey(
            '{{%fk-menu_item-page_id}}',
            '{{%menu_item}}',
            'page_id',
            '{{%page}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%page}}`
        $this->dropForeignKey(
            '{{%fk-menu_item-page_id}}',
            '{{%menu_item}}'
        );

        // drops index for column `page_id`
        $this->dropIndex(
            '{{%idx-menu_item-page_id}}',
            '{{%menu_item}}'
        );

        $this->dropColumn('{{%menu_item}}', 'page_id');
    }
}
