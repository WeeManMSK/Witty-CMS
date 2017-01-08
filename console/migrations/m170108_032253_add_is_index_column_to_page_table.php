<?php

use yii\db\Migration;

/**
 * Handles adding is_index to table `{{%page}}`.
 */
class m170108_032253_add_is_index_column_to_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%page}}', 'is_index', $this->boolean()->notNull()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%page}}', 'is_index');
    }
}
