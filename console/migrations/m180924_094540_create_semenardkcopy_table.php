<?php

use yii\db\Migration;

/**
 * Handles the creation of table `semenardkcopy`.
 */
class m180924_094540_create_semenardkcopy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('semenardkcopy', [
            'id' => $this->primaryKey(),
            'cert_semenardk_id' => $this->integer(),
            'organcert' => $this->string(),
            'regnomer' => $this->integer(),
            'fio' => $this->string(),
            'datezaver' => $this->date(),
            'datedeist' => $this->date(),
            'volume' => $this->integer(),
            'client_address' => $this->string(),
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('semenardkcopy');
    }
}
