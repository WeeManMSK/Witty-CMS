<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%faq_header}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%faq}}`
 */
class m170115_122221_create_faq_header_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%faq_header}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'faq_id' => $this->integer()->notNull(),
            'order' => $this->integer()->notNull()->defaultValue(1000),
        ]);

        // creates index for column `faq_id`
        $this->createIndex(
            '{{%idx-faq_header-faq_id}}',
            '{{%faq_header}}',
            'faq_id'
        );

        // add foreign key for table `{{%faq}}`
        $this->addForeignKey(
            '{{%fk-faq_header-faq_id}}',
            '{{%faq_header}}',
            'faq_id',
            '{{%faq}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%faq}}`
        $this->dropForeignKey(
            '{{%fk-faq_header-faq_id}}',
            '{{%faq_header}}'
        );

        // drops index for column `faq_id`
        $this->dropIndex(
            '{{%idx-faq_header-faq_id}}',
            '{{%faq_header}}'
        );

        $this->dropTable('{{%faq_header}}');
    }
}
