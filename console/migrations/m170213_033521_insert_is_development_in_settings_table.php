<?php

use yii\db\Migration;

class m170213_033521_insert_is_development_in_settings_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%settings}}', 'is_development', $this->boolean()->notNull());

        $this->update('{{%settings}}', [
            'is_development'=>1
        ]);
    }

    public function down()
    {
        $this->dropColumn('{{%settings}}', 'is_development');
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
