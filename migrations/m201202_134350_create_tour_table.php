<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tour}}`.
 */
class m201202_134350_create_tour_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tour}}', [
            'tour_code' => $this->primaryKey()->char(2),
            'name' => $this->char(52),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tour}}');
    }
}
