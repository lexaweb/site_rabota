<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sex}}`.
 */
class m200221_074127_create_sex_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sex}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sex}}');
    }
}
