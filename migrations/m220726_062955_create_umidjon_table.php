<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%umidjon}}`.
 */
class m220726_062955_create_umidjon_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('umidjon', [
            'id' => $this->primaryKey(),
            'kelmagan_kunlari'=>$this->dateTime()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('umidjon');
    }
}
