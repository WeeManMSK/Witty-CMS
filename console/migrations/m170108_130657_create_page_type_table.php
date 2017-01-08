<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%page_type}}`.
 */
class m170108_130657_create_page_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%page_type}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(50)->notNull()->unique(),
            'description' => $this->string(255)->null(),
            'is_deleted' => $this->boolean()->notNull()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%page_type}}');
    }
}
