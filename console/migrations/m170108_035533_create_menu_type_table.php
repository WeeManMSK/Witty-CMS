<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu_type}}`.
 */
class m170108_035533_create_menu_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%menu_type}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(50)->notNull()->unique(),
            'name' => $this->string(50)->notNull()->unique(),
            'is_deleted' => $this->boolean()->defaultValue(0),
        ]);

        $this->insert('{{%menu_type}}', [
            'code'=>'UNDEFINED',
            'name'=>'Undefined'
        ]);
        $this->insert('{{%menu_type}}', [
            'code'=>'HEADER',
            'name'=>'Header'
        ]);
        $this->insert('{{%menu_type}}', [
            'code'=>'FOOTER',
            'name'=>'Footer'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%menu_type}}');
    }
}
