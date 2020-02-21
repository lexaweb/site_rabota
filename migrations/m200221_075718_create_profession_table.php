<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profession}}`.
 */
class m200221_075718_create_profession_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profession}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%profession}}');
    }
}
