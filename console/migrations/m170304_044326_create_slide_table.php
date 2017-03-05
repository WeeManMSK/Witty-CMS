<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slide}}`.
 */
class m170304_044326_create_slide_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%slide}}', [
            'id' => $this->primaryKey(),
            'img_url' => $this->string(1000)->notNull(),
            'thumb_text' => $this->string(255)->null(),
        ]);

        $this->createTable('{{%slide_text}}', [
            'id'=>$this->primaryKey(),
            'slide_id'=>$this->integer()->notNull(),
            'text'=>$this->string(100)->notNull(),
            'class'=>$this->string(255)->null(),
            'horizontal'=>$this->integer()->null(),
            'vertical'=>$this->integer()->null(),
            'show_transition'=>$this->string(20)->null(),
            'hide_transition'=>$this->string(20)->null(),
            'show_delay'=>$this->integer()->null(),
            'hide_delay'=>$this->integer()->null(),
            'layer_init'=>$this->string(20)->null(),
            'style'=>$this->text()->null()
        ]);

        // creates index for column `item_id`
        $this->createIndex(
            '{{%idx-slide_text-slide_id}}',
            '{{%slide_text}}',
            'slide_id'
        );

        // add foreign key for table `{{%catalog_item}}`
        $this->addForeignKey(
            '{{%fk-slide_text-slide_id}}',
            '{{%slide_text}}',
            'slide_id',
            '{{%slide}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        // drops foreign key for table `{{%catalog_item}}`
        $this->dropForeignKey(
            '{{%fk-slide_text-slide_id}}',
            '{{%slide_text}}'
        );

        // drops index for column `item_id`
        $this->dropIndex(
            '{{%idx-slide_text-slide_id}}',
            '{{%slide_text}}'
        );

        $this->dropTable('{{%slide_text}}');

        $this->dropTable('{{%slide}}');
    }
}
