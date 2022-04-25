<?php
class ModelExtensionModuleRewardPointsRegistration extends Model {

	public function addRewardPoints($customer_id, $points, $description) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_reward SET customer_id = '" . (int)$customer_id ."', points = '" . (int)$points . "', description = '" . $this->db->escape($description) . "', date_added = NOW()");
	}
}
