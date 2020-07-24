<?php

use yii\db\Migration;

/**
 * Class m200628_121419_ksl_stat_ip
 */
class m200628_121419_ksl_stat_ip extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        //Создание таблицы IP пользователей
        $this->createTable('{{%ksl_ip_count}}', [
        'id' => $this->primaryKey(),
        'ip' => $this->string(15)->notNull(),
        'str_url' => $this->string(50),
        'date_ip' => $this->integer(),
        'black_list_ip' => $this->boolean()->defaultValue(0)->notNull(),    
        'comment' => $this->string(50),
        ], $tableOptions);

        //Создание таблицы IP ботов
        $this->createTable('{{%ksl_ip_bots}}', [
        'id_bot' => $this->primaryKey(),
        'bot_ip' => $this->string(15)->notNull(),
        'str_url' => $this->string(50),
        'bot_name' => $this->string(30),
        'date' => $this->integer(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%ksl_ip_count}}');
        $this->dropTable('{{%ksl_ip_bots}}');
    }
}