<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%blog_status}}`
 */
class m170103_033914_create_blog_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->null(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-blog-created_by}}',
            '{{%blog}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-blog-created_by}}',
            '{{%blog}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `status`
        $this->createIndex(
            '{{%idx-blog-status}}',
            '{{%blog}}',
            'status'
        );

        // add foreign key for table `{{%blog_status}}`
        $this->addForeignKey(
            '{{%fk-blog-status}}',
            '{{%blog}}',
            'status',
            '{{%blog_status}}',
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
            '{{%fk-blog-created_by}}',
            '{{%blog}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-blog-created_by}}',
            '{{%blog}}'
        );

        // drops foreign key for table `{{%blog_status}}`
        $this->dropForeignKey(
            '{{%fk-blog-status}}',
            '{{%blog}}'
        );

        // drops index for column `status`
        $this->dropIndex(
            '{{%idx-blog-status}}',
            '{{%blog}}'
        );

        $this->dropTable('{{%blog}}');
    }
}
