<?php

use yii\db\Migration;

/**
 * Handles the creation of table `list2`.
 */
class m180901_123355_create_list2_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('list2', [
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
        $this->dropTable('list2');
    }
}
