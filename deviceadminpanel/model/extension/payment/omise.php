<?php

class ModelExtensionPaymentOmise extends Model
{

    public function install()
    {
        $this->db->query("
            CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "omise_charge` (
              `id` INT(11) NOT NULL AUTO_INCREMENT,
              `order_id` INT(11) NOT NULL,
              `omise_charge_id` CHAR(45) NOT NULL,
              `date_added` DATETIME NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;");

        $this->db->query("
            CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "omise_customer` (
              `id` INT(11) NOT NULL AUTO_INCREMENT,
              `customer_id` INT(11) NOT NULL,
              `omise_customer_id` CHAR(45) NOT NULL,
              `date_added` DATETIME NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;");

        return true;
    }

    public function uninstall()
    {
        $this->db->query("DROP TABLE IF EXISTS  `" . DB_PREFIX . "omise_charge` ");
        $this->db->query("DROP TABLE IF EXISTS  `" . DB_PREFIX . "omise_customer` ");
        
    }

    public function getOmiseAccount($pkey, $skey)
    {
        require (DIR_SYSTEM . '/library/omise-php/lib/Omise.php');
        
        try {
            return OmiseAccount::retrieve($pkey, $skey);
        } catch (Exception $e) {
            return array(
                'error' => $e->getMessage()
            );
        }
    }
    
}
