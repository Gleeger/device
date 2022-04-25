<?php
class ControllerExtensionModuleRewardPointsRegistration extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/reward_points_registration');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_reward_points_registration', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['points_catalog'])) {
			$data['error_points_catalog'] = $this->error['points_catalog'];
		} else {
			$data['error_points_catalog'] = '';
		}

		if (isset($this->error['points_admin'])) {
			$data['error_points_admin'] = $this->error['points_admin'];
		} else {
			$data['error_points_admin'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/reward_points_registration', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/reward_points_registration', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_reward_points_registration_customer_group'])) {
			$data['module_reward_points_registration_customer_group'] = $this->request->post['module_reward_points_registration_customer_group'];
		} else {
			$data['module_reward_points_registration_customer_group'] = $this->config->get('module_reward_points_registration_customer_group');
		}

		if (isset($this->request->post['module_reward_points_registration_catalog'])) {
			$data['module_reward_points_registration_catalog'] = $this->request->post['module_reward_points_registration_catalog'];
		} else {
			$data['module_reward_points_registration_catalog'] = $this->config->get('module_reward_points_registration_catalog');
		}

		if (isset($this->request->post['module_reward_points_registration_points_catalog'])) {
			$data['module_reward_points_registration_points_catalog'] = $this->request->post['module_reward_points_registration_points_catalog'];
		} else {
			$data['module_reward_points_registration_points_catalog'] = $this->config->get('module_reward_points_registration_points_catalog');
		}

		if (isset($this->request->post['module_reward_points_registration_description_catalog'])) {
			$data['module_reward_points_registration_description_catalog'] = $this->request->post['module_reward_points_registration_description_catalog'];
		} else {
			$data['module_reward_points_registration_description_catalog'] = $this->config->get('module_reward_points_registration_description_catalog');
		}

		if (isset($this->request->post['module_reward_points_registration_admin'])) {
			$data['module_reward_points_registration_admin'] = $this->request->post['module_reward_points_registration_admin'];
		} else {
			$data['module_reward_points_registration_admin'] = $this->config->get('module_reward_points_registration_admin');
		}

		if (isset($this->request->post['module_reward_points_registration_points_admin'])) {
			$data['module_reward_points_registration_points_admin'] = $this->request->post['module_reward_points_registration_points_admin'];
		} else {
			$data['module_reward_points_registration_points_admin'] = $this->config->get('module_reward_points_registration_points_admin');
		}

		if (isset($this->request->post['module_reward_points_registration_description_admin'])) {
			$data['module_reward_points_registration_description_admin'] = $this->request->post['module_reward_points_registration_description_admin'];
		} else {
			$data['module_reward_points_registration_description_admin'] = $this->config->get('module_reward_points_registration_description_admin');
		}

		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		if (isset($this->request->post['module_reward_points_registration_status'])) {
			$data['module_reward_points_registration_status'] = $this->request->post['module_reward_points_registration_status'];
		} else {
			$data['module_reward_points_registration_status'] = $this->config->get('module_reward_points_registration_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/reward_points_registration', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/reward_points_registration')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ($this->request->post['module_reward_points_registration_catalog']) {
			if ((int)$this->request->post['module_reward_points_registration_points_catalog'] <= 0) {
				$this->error['points_catalog'] = $this->language->get('error_points_catalog');
			}
		}

		if ($this->request->post['module_reward_points_registration_admin']) {
			if ((int)$this->request->post['module_reward_points_registration_points_admin'] <= 0) {
				$this->error['points_admin'] = $this->language->get('error_points_admin');
			}
		}

		return !$this->error;
	}

	public function install() {
		$this->load->model('setting/event');

		$this->model_setting_event->deleteEventByCode('reward_points_registration');
		$this->model_setting_event->deleteEventByCode('reward_points_registration_catalog');
		$this->model_setting_event->deleteEventByCode('reward_points_registration_admin');

		$this->model_setting_event->addEvent('reward_points_registration_catalog', 'catalog/model/account/customer/addCustomer/after', 'extension/module/reward_points_registration/addPoints');
		$this->model_setting_event->addEvent('reward_points_registration_admin', 'admin/model/customer/customer/addCustomer/after', 'extension/module/reward_points_registration/addPoints');
	}

	public function uninstall() {
		$this->load->model('setting/event');

		$this->model_setting_event->deleteEventByCode('reward_points_registration_catalog');
		$this->model_setting_event->deleteEventByCode('reward_points_registration_admin');
	}

	public function addPoints($route, $args, $customer_id) {
		if ($this->config->get('module_reward_points_registration_status')) {
			$points = $this->config->get('module_reward_points_registration_points_admin');
			$description = $this->config->get('module_reward_points_registration_description_admin');
			$customer_group = $this->config->get('module_reward_points_registration_customer_group');
			$enabled = $this->config->get('module_reward_points_registration_admin');

			if ((int)$points > 0 && (int)$enabled == 1) {
				$valid = false;
				if ($customer_group) {
					$this->load->model('customer/customer');
					$customer_info = $this->model_customer_customer->getCustomer($customer_id);
					if ($customer_info && $customer_info['customer_group_id'] == $customer_group) {
						$valid = true;
					}
				} else {
					$valid = true;
				}

				if ($valid) {
					$this->load->model('customer/customer');
					$this->model_customer_customer->addReward($customer_id, $description, $points);
				}
			}
		}
	}
}