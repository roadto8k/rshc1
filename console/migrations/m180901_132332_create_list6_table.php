<?php

use yii\db\Migration;

/**
 * Handles the creation of table `list6`.
 */
class m180901_132332_create_list6_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('list6', [
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
        $this->dropTable('list6');
    }
}
