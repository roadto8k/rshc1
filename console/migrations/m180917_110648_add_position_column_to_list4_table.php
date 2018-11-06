<?php

use yii\db\Migration;

/**
 * Handles adding position to table `list4`.
 */
class m180917_110648_add_position_column_to_list4_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('list4', 'proba', $this->string());
        $this->addColumn('list4', 'chistota', $this->string());
        $this->addColumn('list4', 'botanichsort', $this->string());
        $this->addColumn('list4', 'bolezn', $this->string());
        $this->addColumn('list4', 'jelezist', $this->string());
        $this->addColumn('list4', 'mehanich', $this->string());
        $this->addColumn('list4', 'vredit', $this->string());
        $this->addColumn('list4', 'razmer', $this->string());
        $this->addColumn('list4', 'primes', $this->string());
        $this->addColumn('list4', 'scritoi', $this->string());
        $this->addColumn('list4', 'probissled', $this->string());
        $this->addColumn('list4', 'fitopatog', $this->string());
        $this->addColumn('list4', 'xbk', $this->string());
        $this->addColumn('list4', 'uvk', $this->string());
        $this->addColumn('list4', 'bakter', $this->string());
        $this->addColumn('list4', 'drugie', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('list4', 'position');
    }
}
