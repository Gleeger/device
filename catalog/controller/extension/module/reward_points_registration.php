<?php
class ControllerExtensionModuleRewardPointsRegistration extends Controller {
	public function addPoints($route, $args, $customer_id) {
		if ($this->config->get('module_reward_points_registration_status')) {
			$points = $this->config->get('module_reward_points_registration_points_catalog');
			$description = $this->config->get('module_reward_points_registration_description_catalog');
			$customer_group = $this->config->get('module_reward_points_registration_customer_group');
			$enabled = $this->config->get('module_reward_points_registration_catalog');

			if ((int)$points > 0 && (int)$enabled == 1) {

				$valid = false;
				if ($customer_group) {
					$this->load->model('account/customer');
					$customer_info = $this->model_account_customer->getCustomer($customer_id);
					if ($customer_info && $customer_info['customer_group_id'] == $customer_group) {
						$valid = true;
					}
				} else {
					$valid = true;
				}

				if ($valid) {
					$this->load->model('extension/module/reward_points_registration');
					$this->model_extension_module_reward_points_registration->addRewardPoints($customer_id, $points, $description);

					$this->load->model('account/customer');

					$customer_info = $this->model_account_customer->getCustomer($customer_id);

					if ($customer_info) {
						$this->load->language('extension/module/reward_points_registration');

						$this->config->get('config_name');

						$data['text_received'] = sprintf($this->language->get('text_received'), $points);
						$data['text_total'] = sprintf($this->language->get('text_total'), $this->model_account_customer->getRewardTotal($customer_id));

						$mail = new Mail($this->config->get('config_mail_engine'));
						$mail->protocol = $this->config->get('config_mail_protocol');
						$mail->parameter = $this->config->get('config_mail_parameter');
						$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
						$mail->smtp_username = $this->config->get('config_mail_smtp_username');
						$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
						$mail->smtp_port = $this->config->get('config_mail_smtp_port');
						$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

						$mail->setTo($customer_info['email']);
						$mail->setFrom($this->config->get('config_email'));
						$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
						$mail->setSubject(sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8')));
						$mail->setText($this->load->view('extension/module/reward_points_registration', $data));
						$mail->send();
					}
				}
			}
		}
	}
}
