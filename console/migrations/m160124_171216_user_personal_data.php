<?php

use yii\db\Schema;
use yii\db\Migration;

class m160124_171216_user_personal_data extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_personal_data}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull()->unique(),
            'name' => $this->string(32)->notNull(),
            'surname' => $this->string(32),
            'lastname' => $this->string(32),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%user_personal_data}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
