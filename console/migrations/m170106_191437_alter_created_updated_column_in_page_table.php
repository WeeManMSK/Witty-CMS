<?php

use yii\db\Migration;

class m170106_191437_alter_created_updated_column_in_page_table extends Migration
{
    public function up()
    {
        $this->renameColumn('{{%page}}', 'createdAt', 'created_at');
        $this->renameColumn('{{%page}}', 'modifiedAt', 'updated_at');

        $this->alterColumn('{{%page}}', 'created_at', $this->integer(11)->notNull());
        $this->alterColumn('{{%page}}', 'updated_at', $this->integer(11)->null());
    }

    public function down()
    {
        $this->alterColumn('{{%page}}', 'created_at', $this->dateTime()->notNull());
        $this->alterColumn('{{%page}}', 'updated_at', $this->dateTime()->null());

        $this->renameColumn('{{%page}}', 'created_at', 'createdAt');
        $this->renameColumn('{{%page}}', 'updated_at', 'modifiedAt');
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
