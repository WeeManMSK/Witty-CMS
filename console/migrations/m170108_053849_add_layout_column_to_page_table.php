<?php

use yii\db\Migration;

/**
 * Handles adding layout to table `{{%page}}`.
 */
class m170108_053849_add_layout_column_to_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%page}}', 'layout', $this->string(255)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%page}}', 'layout');
    }
}
