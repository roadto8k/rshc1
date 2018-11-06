<?php

use yii\db\Migration;

/**
 * Handles the creation of table `list1`.
 */
class m180831_125106_create_list1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('list1', [
            'id' => $this->primaryKey(),
            'value' => $this->string(),
            'comment' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('list1');
    }
}
