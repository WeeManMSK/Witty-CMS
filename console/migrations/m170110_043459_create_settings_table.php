<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%settings}}`.
 */
class m170110_043459_create_settings_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%settings}}', [
            'id' => $this->primaryKey(),
            'version' => $this->string()->notNull(),
            'is_offline' => $this->boolean()->notNull()->defaultValue(0),
        ]);

        $this->insert('{{%settings}}', [
            'version' => '0.0.0',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%settings}}');
    }
}
