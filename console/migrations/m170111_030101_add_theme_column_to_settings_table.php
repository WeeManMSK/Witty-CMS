<?php

use yii\db\Migration;

/**
 * Handles adding theme to table `{{%settings}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%theme}}`
 */
class m170111_030101_add_theme_column_to_settings_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%settings}}', 'theme_id', $this->integer()->notNull());

        $this->update('{{%settings}}', [
           'theme_id'=>1
        ]);

        // creates index for column `theme_id`
        $this->createIndex(
            '{{%idx-settings-theme_id}}',
            '{{%settings}}',
            'theme_id'
        );

        // add foreign key for table `{{%theme}}`
        $this->addForeignKey(
            '{{%fk-settings-theme_id}}',
            '{{%settings}}',
            'theme_id',
            '{{%theme}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%theme}}`
        $this->dropForeignKey(
            '{{%fk-settings-theme_id}}',
            '{{%settings}}'
        );

        // drops index for column `theme_id`
        $this->dropIndex(
            '{{%idx-settings-theme_id}}',
            '{{%settings}}'
        );

        $this->dropColumn('{{%settings}}', 'theme_id');
    }
}
