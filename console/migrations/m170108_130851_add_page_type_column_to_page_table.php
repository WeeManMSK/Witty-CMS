<?php

use yii\db\Migration;

/**
 * Handles adding page_type to table `{{%page}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%pate_type}}`
 */
class m170108_130851_add_page_type_column_to_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%page}}', 'page_type_id', $this->integer()->null());

        // creates index for column `page_type_id`
        $this->createIndex(
            '{{%idx-page-page_type_id}}',
            '{{%page}}',
            'page_type_id'
        );

        // add foreign key for table `{{%pate_type}}`
        $this->addForeignKey(
            '{{%fk-page-page_type_id}}',
            '{{%page}}',
            'page_type_id',
            '{{%page_type}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%pate_type}}`
        $this->dropForeignKey(
            '{{%fk-page-page_type_id}}',
            '{{%page}}'
        );

        // drops index for column `page_type_id`
        $this->dropIndex(
            '{{%idx-page-page_type_id}}',
            '{{%page}}'
        );

        $this->dropColumn('{{%page}}', 'page_type_id');
    }
}
