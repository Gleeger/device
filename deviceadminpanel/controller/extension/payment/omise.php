<?php

class ControllerExtensionPaymentomise extends Controller
{

    private $error = array();

    public function install()
    {
        $this->load->model('extension/payment/omise');
        $this->model_extension_payment_omise->install();
    
    }
    
    
    public function uninstall() {
        $this->load->model('extension/payment/omise');
        $this->model_extension_payment_omise->uninstall();
    }
    
    
    public function index()
    {
        $this->load->language('extension/payment/omise');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('payment_omise', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['error_payment_omise_title'])) {
            $data['error_payment_omise_title'] = $this->error['error_payment_omise_title'];
        } else {
            $data['error_payment_omise_title'] = '';
        }

        if (isset($this->error['error_payment_omise_pkey_test'])) {
            $data['error_payment_omise_pkey_test'] = $this->error['error_payment_omise_pkey_test'];
        } else {
            $data['error_payment_omise_pkey_test'] = '';
        }

        if (isset($this->error['error_payment_omise_skey_test'])) {
            $data['error_payment_omise_skey_test'] = $this->error['error_payment_omise_skey_test'];
        } else {
            $data['error_payment_omise_skey_test'] = '';
        }

        if (isset($this->error['error_payment_omise_pkey'])) {
            $data['error_payment_omise_pkey'] = $this->error['error_payment_omise_pkey'];
        } else {
            $data['error_payment_omise_pkey'] = '';
        }

        if (isset($this->error['error_payment_omise_skey'])) {
            $data['error_payment_omise_skey'] = $this->error['error_payment_omise_skey'];
        } else {
            $data['error_payment_omise_skey'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/payment/omise', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/payment/omise', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

        if (isset($this->request->post['payment_omise_title'])) {
            $data['payment_omise_title'] = $this->request->post['payment_omise_title'];
        } else {
            $data['payment_omise_title'] = $this->config->get('payment_omise_title');
        }

        if (isset($this->request->post['payment_omise_pkey_test'])) {
            $data['payment_omise_pkey_test'] = $this->request->post['payment_omise_pkey_test'];
        } else {
            $data['payment_omise_pkey_test'] = $this->config->get('payment_omise_pkey_test');
        }

        if (isset($this->request->post['payment_omise_skey_test'])) {
            $data['payment_omise_skey_test'] = $this->request->post['payment_omise_skey_test'];
        } else {
            $data['payment_omise_skey_test'] = $this->config->get('payment_omise_skey_test');
        }

        if (isset($this->request->post['payment_omise_pkey'])) {
            $data['payment_omise_pkey'] = $this->request->post['payment_omise_pkey'];
        } else {
            $data['payment_omise_pkey'] = $this->config->get('payment_omise_pkey');
        }

        if (isset($this->request->post['payment_omise_skey'])) {
            $data['payment_omise_skey'] = $this->request->post['payment_omise_skey'];
        } else {
            $data['payment_omise_skey'] = $this->config->get('payment_omise_skey');
        }

        if (isset($this->request->post['payment_omise_test'])) {
            $data['payment_omise_test'] = $this->request->post['payment_omise_test'];
        } else {
            $data['payment_omise_test'] = $this->config->get('payment_omise_test');
        }
                
        if (isset($this->request->post['payment_omise_3ds'])) {
            $data['payment_omise_3ds'] = $this->request->post['payment_omise_3ds'];
        } else {
            $data['payment_omise_3ds'] = $this->config->get('payment_omise_3ds');
        }

        
        if (isset($this->request->post['payment_omise_total'])) {
            $data['payment_omise_total'] = $this->request->post['payment_omise_total'];
        } else {
            $data['payment_omise_total'] = $this->config->get('payment_omise_total');
        }

        if (isset($this->request->post['payment_omise_geo_zone_id'])) {
            $data['payment_omise_geo_zone_id'] = $this->request->post['payment_omise_geo_zone_id'];
        } else {
            $data['payment_omise_geo_zone_id'] = $this->config->get('payment_omise_geo_zone_id');
        }

        $this->load->model('localisation/geo_zone');

        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

        if (isset($this->request->post['payment_omise_status'])) {
            $data['payment_omise_status'] = $this->request->post['payment_omise_status'];
        } else {
            $data['payment_omise_status'] = $this->config->get('payment_omise_status');
        }

        if (isset($this->request->post['payment_omise_sort_order'])) {
            $data['payment_omise_sort_order'] = $this->request->post['payment_omise_sort_order'];
        } else {
            $data['payment_omise_sort_order'] = $this->config->get('payment_omise_sort_order');
        }

        $this->load->model('localisation/order_status');
        
        $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
        
        
        if (isset($this->request->post['payment_omise_completed_status_id'])) {
            $data['payment_omise_completed_status_id'] = $this->request->post['payment_omise_completed_status_id'];
        } else {
            $data['payment_omise_completed_status_id'] = $this->config->get('payment_omise_completed_status_id');
        }
        
        if (isset($this->request->post['payment_omise_processing_status_id'])) {
            $data['payment_omise_processing_status_id'] = $this->request->post['payment_omise_processing_status_id'];
        } else {
            $data['payment_omise_processing_status_id'] = $this->config->get('payment_omise_processing_status_id');
        }
        
        if (isset($this->request->post['payment_omise_failed_status_id'])) {
            $data['payment_omise_failed_status_id'] = $this->request->post['payment_omise_failed_status_id'];
        } else {
            $data['payment_omise_failed_status_id'] = $this->config->get('payment_omise_failed_status_id');
        }
        
        
        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/payment/omise', $data));
    }

    private function validate()
    {
        $this->load->model('extension/payment/omise');

        if (! $this->user->hasPermission('modify', 'extension/payment/omise')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        foreach ($this->request->post['payment_omise_title'] as $itle) {
            if (empty($itle)) {
                $this->error['error_payment_omise_title'] = $this->language->get('error_payment_omise_title');
            }
        }

        if ($this->request->post['payment_omise_test']) {

            if (! $this->request->post['payment_omise_pkey_test']) {
                $this->error['error_payment_omise_pkey_test'] = $this->language->get('error_payment_omise_pkey_test');
            }

            if (! $this->request->post['payment_omise_skey_test']) {
                $this->error['error_payment_omise_skey_test'] = $this->language->get('error_payment_omise_skey_test');
            }

            if ($this->request->post['payment_omise_pkey_test'] && $this->request->post['payment_omise_skey_test']) {

                $pkey = $this->request->post['payment_omise_pkey_test'];
                $skey = $this->request->post['payment_omise_skey_test'];

                $omise_account = $this->model_extension_payment_omise->getOmiseAccount($pkey, $skey);
                if ($omise_account['error']) {
                    $this->error['warning'] = $omise_account['error'];
                }
            }
        } else {

            if (! $this->request->post['payment_omise_pkey']) {
                $this->error['error_payment_omise_pkey'] = $this->language->get('error_payment_omise_pkey');
            }

            if (! $this->request->post['payment_omise_skey']) {
                $this->error['error_payment_omise_skey'] = $this->language->get('error_payment_omise_skey');
            }

            if ($this->request->post['payment_omise_pkey'] && $this->request->post['payment_omise_skey']) {

                $pkey = $this->request->post['payment_omise_pkey'];
                $skey = $this->request->post['payment_omise_skey'];

                $omise_account = $this->model_extension_payment_omise->getOmiseAccount($pkey, $skey);
                if ($omise_account['error']) {
                    $this->error['warning'] = $omise_account['error'];
                }
            }
        }

        return ! $this->error;
    }
}