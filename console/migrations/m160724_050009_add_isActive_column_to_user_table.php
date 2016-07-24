<?php

use yii\db\Migration;

/**
 * Handles adding isActive to table `{{%user}}`.
 */
class m160724_050009_add_isActive_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%user}}', 'isActive', $this->boolean()->notNull()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%user}}', 'isActive');
    }
}
