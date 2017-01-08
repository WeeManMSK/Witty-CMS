<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%menu_type}}`
 */
class m170108_035817_create_menu_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'menu_type_id' => $this->integer()->null(),
        ]);

        // creates index for column `menu_type_id`
        $this->createIndex(
            '{{%idx-menu-menu_type_id}}',
            '{{%menu}}',
            'menu_type_id'
        );

        // add foreign key for table `{{%menu_type}}`
        $this->addForeignKey(
            '{{%fk-menu-menu_type_id}}',
            '{{%menu}}',
            'menu_type_id',
            '{{%menu_type}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `{{%menu_type}}`
        $this->dropForeignKey(
            '{{%fk-menu-menu_type_id}}',
            '{{%menu}}'
        );

        // drops index for column `menu_type_id`
        $this->dropIndex(
            '{{%idx-menu-menu_type_id}}',
            '{{%menu}}'
        );

        $this->dropTable('{{%menu}}');
    }
}
