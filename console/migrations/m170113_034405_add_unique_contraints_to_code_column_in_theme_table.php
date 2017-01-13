<?php

use yii\db\Migration;

class m170113_034405_add_unique_contraints_to_code_column_in_theme_table extends Migration
{
    public function up()
    {
        $this->alterColumn('{{%theme}}', 'code', $this->string(100)->notNull()->unique());
    }

    public function down()
    {
        $this->alterColumn('{{%theme}}', 'code', $this->string(100)->notNull());
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
