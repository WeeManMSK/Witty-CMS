<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_status}}`.
 */
class m170103_033724_create_blog_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%blog_status}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string()->notNull(),
            'description' => $this->string(255)->null(),
            'is_deleted' => $this->boolean()->defaultValue(0)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%blog_status}}');
    }
}
