<?php

use yii\db\Migration;

/**
 * Handles adding roleId to table `{{%user}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%role}}`
 */
class m160724_045615_add_roleId_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%user}}', 'roleId', $this->integer()->notNull());

        // creates index for column `roleId`
        $this->createIndex(
            '{{%idx-user-roleId}}',
            '{{%user}}',
            'roleId'
        );

        // add foreign key for table `{{%role}}`
        $this->addForeignKey(
            '{{%fk-user-roleId}}',
            '{{%user}}',
            'roleId',
            '{{%role}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%role}}`
        $this->dropForeignKey(
            '{{%fk-user-roleId}}',
            '{{%user}}'
        );

        // drops index for column `roleId`
        $this->dropIndex(
            '{{%idx-user-roleId}}',
            '{{%user}}'
        );

        $this->dropColumn('{{%user}}', 'roleId');
    }
}
