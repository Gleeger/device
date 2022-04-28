<?php
class Controllerextensioncustverf extends Controller {
	private $error = array();
	private $modpath = 'extension/custverf'; 
  	private $modname = 'custverf';
  	private $modssl = 'SSL';
 	private $langid = 0;
	private $storeid = 0;
	private $custgrpid = 0;

	public function __construct($registry) {
		parent::__construct($registry);
		
		$this->langid = (int)$this->config->get('config_language_id');
		$this->storeid = (int)$this->config->get('config_store_id');
		$this->custgrpid = (int)$this->config->get('config_customer_group_id');
 		
		if(substr(VERSION,0,3)>='3.0') { 
			$this->modname = 'module_custverf';
		} 
		
		if(substr(VERSION,0,3)>='3.0' || substr(VERSION,0,3)=='2.3' || substr(VERSION,0,3)=='2.2') { 
			$this->modssl = true;
 		} 
  	}
	public function getcache() {
		$this->load->model($this->modpath);
		$getmodstatus = $this->model_extension_custverf->getmodstatus();
 		if($getmodstatus && isset($this->session->data['custverf_customer_id']) && $this->session->data['custverf_customer_id']) {
   			$emailsentpopuptemp = $this->config->get($this->modname.'_emailsentpopuptemp');
			$verisuccesspopuptemp = $this->config->get($this->modname.'_verisuccesspopuptemp');
			
			$this->load->model('account/customer');
			$customer_info = $this->model_account_customer->getCustomer($this->session->data['custverf_customer_id']);
			if($customer_info) { 
				
				$this->load->model('account/customer_group');
				$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_info['customer_group_id']);
				
				$findscode = array(
					'{customer_id}',
					'{customer_group_name}',
					'{date_added}',
					'{firstname}',
					'{lastname}',
					'{email}',
					'{telephone}',	
					'{verify_link}',			
				);
	
				$replacescode = array(
					'customer_id' => $customer_info['customer_id'],
					'customer_group_name' => $customer_group_info['name'],
					'date_added'  => date($this->language->get('date_format_short'), strtotime($customer_info['date_added'])),
					'firstname' => $customer_info['firstname'],
					'lastname' => $customer_info['lastname'],
					'email' => $customer_info['email'],
					'telephone' => $customer_info['telephone'],
					'verify_link' => '',
				);
				
				$emailsentpopuptemp[$this->langid] = str_replace($findscode, $replacescode, $emailsentpopuptemp[$this->langid]);
				$verisuccesspopuptemp[$this->langid] = str_replace($findscode, $replacescode, $verisuccesspopuptemp[$this->langid]);
				
				$json['emailsentpopuptemp'] = html_entity_decode($emailsentpopuptemp[$this->langid], ENT_QUOTES, 'UTF-8');
				$json['verisuccesspopuptemp'] = html_entity_decode($verisuccesspopuptemp[$this->langid], ENT_QUOTES, 'UTF-8');
				
				$json['custverf_sendcustemail'] = 0;
				if(isset($this->session->data['custverf_sendcustemail']) && $this->session->data['custverf_sendcustemail'] == 1) { 
					$json['custverf_sendcustemail'] = 1;
					unset($this->session->data['custverf_sendcustemail']);
				}
				
				$json['custverf_successpop'] = 0;
				if(isset($this->session->data['custverf_successpop']) && $this->session->data['custverf_successpop'] == 1) { 
					$json['custverf_successpop'] = 1;
					unset($this->session->data['custverf_successpop']);
				}
				
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
			}
		}
	}
}