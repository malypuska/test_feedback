<?php
class m161101_180000_creat_table_feedback extends CDbMigration
{
    public function safeUp()
    {
       $this->dbConnection->createCommand("CREATE TABLE `test_feedback`(`id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `message` TEXT , `dt` TIMESTAMP , `send` TINYINT(1) DEFAULT '0' , PRIMARY KEY (`id`));")->execute();
        
    }

    public function safeDown()
    {
        $this->dbConnection->createCommand("DROP TABLE `test_feedback`;")->execute();
    }
}