<?php

use yii\db\Migration;

/**
 * Handles the creation of table `kartofelcopy`.
 */
class m180922_200457_create_kartofelcopy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('kartofelcopy', [
            'id' => $this->primaryKey(),
            'cert_kartofel_id' => $this->integer(),
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
        $this->dropTable('kartofelcopy');
    }
}
