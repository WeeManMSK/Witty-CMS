<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%role}}`.
 */
class m160724_045104_create_role_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%role}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'isDeleted' => $this->boolean()->defaultValue(0)->notNull(),
            'isActive' => $this->boolean()->notNull()->defaultValue(0),
        ]);

        $this->insert("{{%role}}",["name"=>"Guest"]);
        $this->insert("{{%role}}",["name"=>"User"]);
        $this->insert("{{%role}}",["name"=>"Admin"]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%role}}');
    }
}
