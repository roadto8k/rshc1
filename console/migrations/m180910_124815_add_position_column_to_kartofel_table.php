<?php

use yii\db\Migration;

/**
 * Handles adding position to table `post`.
 */
class m180910_124815_add_position_column_to_kartofel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('kartofel', 'proba', $this->string());
        $this->addColumn('kartofel', 'chistota', $this->string());
        $this->addColumn('kartofel', 'botanichsort', $this->string());
        $this->addColumn('kartofel', 'bolezn', $this->string());
        $this->addColumn('kartofel', 'jelezist', $this->string());
        $this->addColumn('kartofel', 'mehanich', $this->string());
        $this->addColumn('kartofel', 'vredit', $this->string());
        $this->addColumn('kartofel', 'razmer', $this->string());
        $this->addColumn('kartofel', 'primes', $this->string());
        $this->addColumn('kartofel', 'scritoi', $this->string());
        $this->addColumn('kartofel', 'probissled', $this->string());
        $this->addColumn('kartofel', 'fitopatog', $this->string());
        $this->addColumn('kartofel', 'xbk', $this->string());
        $this->addColumn('kartofel', 'uvk', $this->string());
        $this->addColumn('kartofel', 'bakter', $this->string());
        $this->addColumn('kartofel', 'drugie', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('kartofel', 'position');
    }
}
