<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m201202_134216_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'code' => $this->primaryKey()->char(2),
            'name' => $this->char(52),
            'population' => $this->int(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}
