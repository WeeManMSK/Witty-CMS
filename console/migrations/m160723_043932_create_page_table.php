<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%page}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m160723_043932_create_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%page}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->unique(),
            'body' => $this->text()->notNull(),
            'authorId' => $this->integer()->notNull(),
            'modifiedById' => $this->integer(),
            'createdAt' => $this->dateTime(),
            'modifiedAt' => $this->dateTime(),
            'isDeleted' => $this->boolean()->defaultValue(0),
        ]);

        // creates index for column `authorId`
        $this->createIndex(
            '{{%idx-page-authorId}}',
            '{{%page}}',
            'authorId'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-page-authorId}}',
            '{{%page}}',
            'authorId',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `modifiedById`
        $this->createIndex(
            '{{%idx-page-modifiedById}}',
            '{{%page}}',
            'modifiedById'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-page-modifiedById}}',
            '{{%page}}',
            'modifiedById',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-page-authorId}}',
            '{{%page}}'
        );

        // drops index for column `authorId`
        $this->dropIndex(
            '{{%idx-page-authorId}}',
            '{{%page}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-page-modifiedById}}',
            '{{%page}}'
        );

        // drops index for column `modifiedById`
        $this->dropIndex(
            '{{%idx-page-modifiedById}}',
            '{{%page}}'
        );

        $this->dropTable('{{%page}}');
    }
}
