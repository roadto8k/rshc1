<?php

use yii\db\Migration;

/**
 * Handles adding position to table `semenardk`.
 */
class m180912_093604_add_position_column_to_semenardk_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('semenardk', '1sortovaya', $this->string());
        $this->addColumn('semenardk', '2chistota', $this->string());
        $this->addColumn('semenardk', '2vtomchisle', $this->string());
        $this->addColumn('semenardk', '3drcult', $this->string());
        $this->addColumn('semenardk', '3vtcviki', $this->string());
        $this->addColumn('semenardk', '4cormovie', $this->string());
        $this->addColumn('semenardk', '5drrasten', $this->string());
        $this->addColumn('semenardk', '6sornih', $this->string());
        $this->addColumn('semenardk', '6vtcnaibvred', $this->string());
        $this->addColumn('semenardk', '6karant', $this->string());
        $this->addColumn('semenardk', '6yadovit', $this->string());
        $this->addColumn('semenardk', '7energiya', $this->string());
        $this->addColumn('semenardk', '8vshojest', $this->string());
        $this->addColumn('semenardk', '8vtctvrd', $this->string());
        $this->addColumn('semenardk', 'uslprorash', $this->string());
        $this->addColumn('semenardk', 'catsortchis', $this->string());
        $this->addColumn('semenardk', '9jiznesp', $this->string());
        $this->addColumn('semenardk', '9metod', $this->string());
        $this->addColumn('semenardk', '10vlajnost', $this->string());
        $this->addColumn('semenardk', '11massa', $this->string());
        $this->addColumn('semenardk', '12zarajenn', $this->string());
        $this->addColumn('semenardk', '12skleroc', $this->string());
        $this->addColumn('semenardk', '12golovnevie', $this->string());
        $this->addColumn('semenardk', '13zaselenvred', $this->string());
        $this->addColumn('semenardk', '14odnorast', $this->string());
        $this->addColumn('semenardk', '15stebel', $this->string());
        $this->addColumn('semenardk', '16viravnen', $this->string());
        $this->addColumn('semenardk', '17odnosem', $this->string());
        $this->addColumn('semenardk', '18sostav', $this->string());
        $this->addColumn('semenardk', '19drugie', $this->string());
        $this->addColumn('semenardk', '20sert', $this->string());
        $this->addColumn('semenardk', '21pasport', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('semenardk', 'position');
    }
}
