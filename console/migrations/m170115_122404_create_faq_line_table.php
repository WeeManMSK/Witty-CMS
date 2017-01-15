<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%faq_line}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%faq_header}}`
 */
class m170115_122404_create_faq_line_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%faq_line}}', [
            'id' => $this->primaryKey(),
            'faq_header_id' => $this->integer()->notNull(),
            'question' => $this->string()->notNull(),
            'answer' => $this->string()->notNull(),
            'is_deleted' => $this->boolean()->notNull()->defaultValue(0),
            'order' => $this->integer()->notNull()->defaultValue(1000),
        ]);

        // creates index for column `faq_header_id`
        $this->createIndex(
            '{{%idx-faq_line-faq_header_id}}',
            '{{%faq_line}}',
            'faq_header_id'
        );

        // add foreign key for table `{{%faq_header}}`
        $this->addForeignKey(
            '{{%fk-faq_line-faq_header_id}}',
            '{{%faq_line}}',
            'faq_header_id',
            '{{%faq_header}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%faq_header}}`
        $this->dropForeignKey(
            '{{%fk-faq_line-faq_header_id}}',
            '{{%faq_line}}'
        );

        // drops index for column `faq_header_id`
        $this->dropIndex(
            '{{%idx-faq_line-faq_header_id}}',
            '{{%faq_line}}'
        );

        $this->dropTable('{{%faq_line}}');
    }
}
