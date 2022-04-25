<?php
class ModelExtensioncustverf extends Controller {	
	private $error = array();
	private $modpath = 'extension/custverf'; 
  	private $modname = 'custverf';
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
 	}
	public function getmodstatus() {
 		return $this->config->get($this->modname.'_status');
	}
	public function sendcustemail($customer_id) {	
		if($this->config->get($this->modname.'_status')) {
			$this->load->language('account/account');
			
			$notifyadmin = $this->config->get($this->modname.'_notifyadmin');
			$apprverified = $this->config->get($this->modname.'_apprverified');
			$emailsubj = $this->config->get($this->modname.'_emailsubj');
			$emailtemp = $this->config->get($this->modname.'_emailtemp');
			$adminemailsubj = $this->config->get($this->modname.'_adminemailsubj');
			$adminemailtemp = $this->config->get($this->modname.'_adminemailtemp');
			$emailsentpopuptemp = $this->config->get($this->modname.'_emailsentpopuptemp');
			$verisuccesspopuptemp = $this->config->get($this->modname.'_verisuccesspopuptemp');
			
			$emailsubj = $emailsubj[$this->langid];
			$emailtemp = html_entity_decode($emailtemp[$this->langid], ENT_QUOTES, 'UTF-8');
			$adminemailsubj = $adminemailsubj[$this->langid];
			$adminemailtemp = html_entity_decode($adminemailtemp[$this->langid], ENT_QUOTES, 'UTF-8');
			$emailsentpopuptemp = html_entity_decode($emailsentpopuptemp[$this->langid], ENT_QUOTES, 'UTF-8');
			$verisuccesspopuptemp = html_entity_decode($verisuccesspopuptemp[$this->langid], ENT_QUOTES, 'UTF-8');
			
 			$custverf_token = substr(md5(mt_rand()), 0, 30);
			$this->db->query("update " . DB_PREFIX . "customer set custverf_token='" . $this->db->escape($custverf_token) . "', custverf_confirm=0 where customer_id='" . (int)$customer_id . "'");
			$verify_link = $this->url->link('account/login', 'verifytoken=' . $custverf_token);
 			$verify_link_html = '<a href="'.$verify_link.'">'.$verify_link.'</a>';
			
			$this->log->write($verify_link_html);
			$this->log->write('customer_id='.$customer_id);
		
			 // get customer details
			$this->load->model('account/customer');
			$customer_info = $this->model_account_customer->getCustomer($customer_id);
			if($customer_info) {
				$this->session->data['custverf_sendcustemail'] = 1;
				$this->session->data['custverf_customer_id'] = $customer_id;
				
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
					'verify_link' => $verify_link_html,
				);
				
				$emailtemp = str_replace($findscode, $replacescode, $emailtemp);
			
				// shoot email to customer
				if(substr(VERSION,0,3)>='3.0') {
					$mail = new Mail($this->config->get('config_mail_engine'));
				} else {
					$mail = new Mail();
					$mail->protocol = $this->config->get('config_mail_protocol');
				}
		
				$mail->parameter = $this->config->get('config_mail_parameter');
				$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
				$mail->smtp_username = $this->config->get('config_mail_smtp_username');
				$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->smtp_port = $this->config->get('config_mail_smtp_port');
				$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
		
				$mail->setTo($customer_info['email']);
				$mail->setFrom($this->config->get('config_email'));
				$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
				$mail->setSubject($emailsubj);
				$mail->setHtml($emailtemp);
				$mail->send(); 	
			}
		}
	}
	public function sendadminemail($token) {	
		if($this->config->get($this->modname.'_status') && $token) {
			$custquery = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE custverf_token = '" . $this->db->escape($token) . "'");
			if($custquery->num_rows) {
				$customer_id = $custquery->row['customer_id'];
				
				$this->load->language('account/account');
				
				$notifyadmin = $this->config->get($this->modname.'_notifyadmin');
				$apprverified = $this->config->get($this->modname.'_apprverified');
				$emailsubj = $this->config->get($this->modname.'_emailsubj');
				$emailtemp = $this->config->get($this->modname.'_emailtemp');
				$adminemailsubj = $this->config->get($this->modname.'_adminemailsubj');
				$adminemailtemp = $this->config->get($this->modname.'_adminemailtemp');
				$emailsentpopuptemp = $this->config->get($this->modname.'_emailsentpopuptemp');
				$verisuccesspopuptemp = $this->config->get($this->modname.'_verisuccesspopuptemp');
				
				$emailsubj = $emailsubj[$this->langid];
				$emailtemp = html_entity_decode($emailtemp[$this->langid], ENT_QUOTES, 'UTF-8');
				$adminemailsubj = $adminemailsubj[$this->langid];
				$adminemailtemp = html_entity_decode($adminemailtemp[$this->langid], ENT_QUOTES, 'UTF-8');
				$emailsentpopuptemp = html_entity_decode($emailsentpopuptemp[$this->langid], ENT_QUOTES, 'UTF-8');
				$verisuccesspopuptemp = html_entity_decode($verisuccesspopuptemp[$this->langid], ENT_QUOTES, 'UTF-8');
				
				$this->db->query("update " . DB_PREFIX . "customer set custverf_confirm=1 where customer_id='" . (int)$customer_id . "'");
 				if($apprverified == 1) {
					$this->db->query("update " . DB_PREFIX . "customer set status=1 where customer_id='" . (int)$customer_id . "'");
				}
			
				 // get customer details
				$this->load->model('account/customer');
				$customer_info = $this->model_account_customer->getCustomer($customer_id);
				if($customer_info) {
					$this->session->data['custverf_successpop'] = 1;
					$this->session->data['custverf_customer_id'] = $customer_id;
					
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
					
					$adminemailtemp = str_replace($findscode, $replacescode, $adminemailtemp);
					
					if($notifyadmin == 1) {				
						// shoot email to admin
						if(substr(VERSION,0,3)>='3.0') {
							$mail = new Mail($this->config->get('config_mail_engine'));
						} else {
							$mail = new Mail();
							$mail->protocol = $this->config->get('config_mail_protocol');
						}
				
						$mail->parameter = $this->config->get('config_mail_parameter');
						$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
						$mail->smtp_username = $this->config->get('config_mail_smtp_username');
						$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
						$mail->smtp_port = $this->config->get('config_mail_smtp_port');
						$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
				
						$mail->setTo($this->config->get('config_email'));
						$mail->setFrom($this->config->get('config_email'));
						$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
						$mail->setSubject($adminemailsubj);
						$mail->setHtml($adminemailtemp);
						$mail->send(); 	
					}
				}
			}
		}
	}
}