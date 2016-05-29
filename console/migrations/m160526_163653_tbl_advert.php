<?php

use yii\db\Migration;

class m160526_163653_tbl_advert extends Migration
{
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `advert` (
  `idadvert` int(11) NOT NULL,
  `price` mediumint(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `agent` mediumint(11) DEFAULT NULL,
  `bedroom` smallint(1) DEFAULT NULL,
  `livingroom` smallint(1) DEFAULT NULL,
  `parking` smallint(1) DEFAULT NULL,
  `kitchen` smallint(1) DEFAULT NULL,
  `general_image` varchar(200) DEFAULT NULL,
  `description` text,
  `advertcol` varchar(45) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `hot` smallint(1) DEFAULT NULL,
  `sold` smallint(1) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `recommend` smallint(1) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;");
    }

    public function down()
    {
        $this->dropTable('advert');

        return false;
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
