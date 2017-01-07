<?php

use yii\db\Migration;

/**
 * Handles adding is_visible to table `{{%page}}`.
 */
class m170107_184543_add_is_visible_column_to_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%page}}', 'is_visible', $this->boolean()->notNull()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%page}}', 'is_visible');
    }
}
