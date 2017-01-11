<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%theme}}`.
 */
class m170111_025942_create_theme_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%theme}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(100)->notNull(),
            'name' => $this->string(100)->notNull(),
            'version' => $this->string(20)->notNull(),
            'author' => $this->string(100)->notNull(),
            'url' => $this->string(255)->notNull(),
        ]);

        $this->insert('{{%theme}}',
            [
                'code'=>'default',
                'name'=>'WittyCMS Default Theme',
                'version'=> '1.0.0',
                'author'=> 'Witty CMS',
                'url' => 'http:\\wit-style.ru'
            ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%theme}}');
    }
}
