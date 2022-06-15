<?php
class ControllerExtensionModulecustverf extends Controller {	
	private $error = array();
	private $modpath = 'module/custverf'; 
	private $modtpl = 'module/custverf.tpl';
	private $modname = 'custverf';
	private $modtext = 'Customer Email Verification';
	private $modid = '31650';
	private $modssl = 'SSL';
	private $modemail = 'opencarttools@gmail.com';
	private $token_str = '';
	private $modurl = 'extension/module';
	private $modurltext = '';
	private $langid = 0;
	private $storeid = 0;
	private $custgrpid = 0;

	public function __construct($registry) {
		parent::__construct($registry);
		
		$this->langid = (int)$this->config->get('config_language_id');
		$this->storeid = (int)$this->config->get('config_store_id');
		$this->custgrpid = (int)$this->config->get('config_customer_group_id');
 		
		if(substr(VERSION,0,3)>='3.0' || substr(VERSION,0,3)=='2.3') { 
			$this->modtpl = 'extension/module/custverf';
			$this->modpath = 'extension/module/custverf';
		} else if(substr(VERSION,0,3)=='2.2') {
			$this->modtpl = 'module/custverf';
		} 
		
		if(substr(VERSION,0,3)>='3.0') { 
			$this->modname = 'module_custverf';
			$this->modurl = 'marketplace/extension'; 
			$this->token_str = 'user_token=' . $this->session->data['user_token'] . '&type=module';
		} else if(substr(VERSION,0,3)=='2.3') {
			$this->modurl = 'extension/extension';
			$this->token_str = 'token=' . $this->session->data['token'] . '&type=module';
		} else {
			$this->token_str = 'token=' . $this->session->data['token'];
		}
		
		if(substr(VERSION,0,3)>='3.0' || substr(VERSION,0,3)=='2.3' || substr(VERSION,0,3)=='2.2') { 
			$this->modssl = true;
		} 
 	} 
	
	public function index() {
		$data = $this->load->language($this->modpath);
		$this->modurltext = $this->language->get('text_extension');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting($this->modname, $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			if(! (isset($this->request->post['svsty']) && $this->request->post['svsty'] == 1)) {
				$this->response->redirect($this->url->link($this->modurl, $this->token_str, $this->modssl));
			}
		}

		$data['heading_title'] = $this->language->get('heading_title');
 
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', $this->token_str, $this->modssl)
		);
		
		$data['breadcrumbs'][] = array(
			'text' => $this->modurltext,
			'href' => $this->url->link($this->modurl, $this->token_str, $this->modssl)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link($this->modpath, $this->token_str, $this->modssl)
		);

		$data['action'] = $this->url->link($this->modpath, $this->token_str, $this->modssl);
		
		$data['cancel'] = $this->url->link($this->modurl, $this->token_str , $this->modssl); 
		
		if(substr(VERSION,0,3)>='3.0') { 
			$data['user_token'] = $this->session->data['user_token'];
		} else {
			$data['token'] = $this->session->data['token'];
		} 
		
		$data['isoc2021'] = false;
		if(substr(VERSION,0,3)=='2.0' || substr(VERSION,0,3)=='2.1') {
			$data['isoc2021'] = true;
		}
		$data['isoc22'] = false;
		if(substr(VERSION,0,3)=='2.2') {
			$data['isoc22'] = true;
		}
		$data['isoc23'] = false;
		if(substr(VERSION,0,3)=='2.3') {
			$data['isoc23'] = true;
		}
		$data['isoc30'] = false;
		if(substr(VERSION,0,3)>='3.0') {
			$data['isoc30'] = true;
		}
		
 		$this->load->model('localisation/language');
  		$languages = $this->model_localisation_language->getLanguages();
		foreach($languages as $language) {
			if(substr(VERSION,0,3)>='3.0' || substr(VERSION,0,3)=='2.3' || substr(VERSION,0,3)=='2.2') {
				$imgsrc = "language/".$language['code']."/".$language['code'].".png";
			} else {
				$imgsrc = "view/image/flags/".$language['image'];
			}
			$data['languages'][] = array("language_id" => $language['language_id'], "name" => $language['name'], "imgsrc" => $imgsrc);
		}
		
 		$data[$this->modname.'_status'] = $this->setvalue($this->modname.'_status');
		$data[$this->modname.'_notifyadmin'] = $this->setvalue($this->modname.'_notifyadmin');
		$data[$this->modname.'_apprverified'] = $this->setvalue($this->modname.'_apprverified');
 		$data[$this->modname.'_emailsubj'] = $this->setvalue($this->modname.'_emailsubj');
		$data[$this->modname.'_emailtemp'] = $this->setvalue($this->modname.'_emailtemp');
  		$data[$this->modname.'_adminemailsubj'] = $this->setvalue($this->modname.'_adminemailsubj');
  		$data[$this->modname.'_adminemailtemp'] = $this->setvalue($this->modname.'_adminemailtemp');
		$data[$this->modname.'_emailsentpopuptemp'] = $this->setvalue($this->modname.'_emailsentpopuptemp');
		$data[$this->modname.'_verisuccesspopuptemp'] = $this->setvalue($this->modname.'_verisuccesspopuptemp');
		
		$data['findscode'] = array(
			'{customer_id}',
			'{customer_group_name}',
			'{date_added}',
			'{firstname}',
			'{lastname}',
			'{email}',
			'{telephone}',					
			'{verify_link}',
		);
		$data['findscode'] = implode(", ", $data['findscode']);
   		
		$data['modname'] = $this->modname;
		$data['modemail'] = $this->modemail;
  		  
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view($this->modtpl, $data));
	}
	
	public function getcache() {
		$this->load->model('extension/custverf');
		$getmodstatus = $this->model_extension_custverf->getmodstatus();
 		if($getmodstatus && isset($this->session->data['custverf_customer_id']) && $this->session->data['custverf_customer_id']) {
   			$emailsentpopuptemp = $this->config->get($this->modname.'_emailsentpopuptemp');
 			
			$this->load->model('customer/customer');
			$customer_info = $this->model_customer_customer->getCustomer($this->session->data['custverf_customer_id']);
			if($customer_info) { 
				
				$this->load->model('customer/customer_group');
				$customer_group_info = $this->model_customer_customer_group->getCustomerGroup($customer_info['customer_group_id']);
				
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
 				
				$json['emailsentpopuptemp'] = html_entity_decode($emailsentpopuptemp[$this->langid], ENT_QUOTES, 'UTF-8');
 				
				$json['custverf_sendcustemail'] = 0;
				if(isset($this->session->data['custverf_sendcustemail']) && $this->session->data['custverf_sendcustemail'] == 1) { 
					$json['custverf_sendcustemail'] = 1;
					unset($this->session->data['custverf_sendcustemail']);
				} 
				
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
			}
		}
	}
	
	public function sendverifyemail() {
		$this->load->model('extension/custverf');
		$getmodstatus = $this->model_extension_custverf->getmodstatus();
 		if($getmodstatus && isset($this->request->get['customer_id']) && $this->request->get['customer_id']) {
   			$this->model_extension_custverf->sendcustemail($this->request->get['customer_id']);
			$this->response->redirect($this->url->link('customer/customer', 'user_token=' . $this->session->data['user_token'], true));
		}
	}
	
	protected function setvalue($postfield) {
		if (isset($this->request->post[$postfield])) {
			$postfield_value = $this->request->post[$postfield];
		} else {
			$postfield_value = $this->config->get($postfield);
		} 	
 		return $postfield_value;
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', $this->modpath)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}  
	
	public function install() { 
		$query = $this->db->query("SHOW COLUMNS FROM `".DB_PREFIX."customer` LIKE 'custverf_token' ");
		if(!$query->num_rows){
			$this->db->query("ALTER TABLE `".DB_PREFIX."customer` ADD `custverf_token` varchar(50) ");
		}
		$query = $this->db->query("SHOW COLUMNS FROM `".DB_PREFIX."customer` LIKE 'custverf_confirm' ");
		if(!$query->num_rows){
			$this->db->query("ALTER TABLE `".DB_PREFIX."customer` ADD `custverf_confirm` tinyint(1) DEFAULT '0'");
		} 
		
		if(function_exists('curl_version')) { 
			$pdata['extid'] = $this->modid;
			$pdata['version'] = VERSION;
			$pdata['installat'] = HTTP_CATALOG;
			$pdata['email'] = $this->config->get('config_email'); 
			
 			$curl = curl_init("http://www.opencarttools.net/licentry.php");
	
 			curl_setopt($curl, CURLOPT_HEADER, 0);
 			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_FORBID_REUSE, 1);
			curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
			curl_setopt($curl, CURLOPT_TIMEOUT, 10);
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($pdata, '', '&'));
	
			$response = curl_exec($curl); 
			
			//echo $response; exit;
		}     
	}
	
	public function uninstall() { 
 		// uninstalled     
	}
}