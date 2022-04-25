<?php
class ModelExtensionModuleOptionSpecial extends Model {
	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "option_special` (
		  `option_special_id` int(11) NOT NULL AUTO_INCREMENT,
		  `product_id` int(11) NOT NULL,
		  `product_option_id` int(11) NOT NULL,
		  `product_option_value_id` int(11) NOT NULL,
		  `customer_group_id` int(11) NOT NULL,
		  `priority` int(5) NOT NULL DEFAULT '1',
		  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
		  `date_start` date NOT NULL DEFAULT '0000-00-00',
		  `date_end` date NOT NULL DEFAULT '0000-00-00',
		  PRIMARY KEY (`option_special_id`),
		  KEY `product_id` (`product_id`),
		  KEY `product_option_id` (`product_option_id`),
		  KEY `product_option_value_id` (`product_option_value_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
	}
}