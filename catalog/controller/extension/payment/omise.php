<?php

class ControllerExtensionPaymentOmise extends Controller
{

    public static function amount($currency, $amount)
    {
        switch (strtoupper($currency)) {
            case 'THB':
                $amount = $amount * 100;
                break;
                
            case 'USD':
                $amount = $amount * 100;
                break;
                
            case 'GBP':
                $amount = $amount * 100;
                break;
                
            case 'EUR':
                $amount = $amount * 100;
                break;
                
            case 'SGD':
                $amount = $amount * 100;
                break;
                
            case 'JPY':
                break;
                
            default:
                break;
        }
        
        return $amount;
    }
    
    
    private function searchErrorTranslation($clue)
    {
        $this->load->language('extension/payment/omise');

        $translate_code = 'error_' . str_replace(' ', '_', strtolower($clue));
        $translate_msg = $this->language->get($translate_code);

        if ($translate_code !== $translate_msg) {
            return $translate_msg;
        }

        return $clue;
    }

    public function checkoutCallback()
    {
        if ($this->request->get['order_id']) {

            require (DIR_SYSTEM . '/library/omise-php/lib/Omise.php');
            
            $this->load->model('extension/payment/omise');
            $this->load->model('checkout/order');

            $order_id = $this->request->get['order_id'];
            $omise_keys = $this->model_extension_payment_omise->retrieveOmiseKeys();
            $transaction = $this->model_extension_payment_omise->getChargeTransaction($this->request->get['order_id']);

            $charge = OmiseCharge::retrieve($transaction->row['omise_charge_id'], $omise_keys['pkey'], $omise_keys['skey']);                 
            
            if ($charge && $charge['authorized'] && $charge['capture']) {
              
                // Status: processed.                
                $order_status_id = $this->config->get('payment_omise_completed_status_id');                
                $this->model_checkout_order->addOrderHistory($order_id, $order_status_id);
                
                $this->response->redirect($this->url->link('checkout/success',"",true));
            } else {
                // Status: failed.
                $order_status_id = $this->config->get('payment_omise_failed_status_id'); 
                $this->model_checkout_order->addOrderHistory($order_id, $order_status_id);
                $this->response->redirect($this->url->link('checkout/failure',"",true));
            }
        }

        exit();
    }

    public function index()
    {
        $this->load->model('checkout/order');
        $this->load->model('extension/payment/omise');
        $this->load->language('extension/payment/omise');

        $data = array();
        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

        if ($order_info) {
            $data['button_confirm'] = $this->language->get('button_confirm');
            $data['checkout_url'] = $this->url->link('extension/payment/omise/checkout',"",true);
            $data['success_url'] = $this->url->link('checkout/success',"",true);
            $data['text_config_one'] = trim($this->config->get('text_config_one'));
            $data['text_config_two'] = trim($this->config->get('text_config_two'));
            $data['orderid'] = date('His') . $this->session->data['order_id'];
            $data['callbackurl'] = $this->url->link('payment/custom/callback',"",true);
            $data['orderdate'] = date('YmdHis');
            $data['currency'] = $order_info['currency_code'];
            $data['orderamount'] = $this->currency->format($order_info['total'], $order_info['currency_code'], false, false);
            $data['billemail'] = $order_info['email'];
            $data['billphone'] = html_entity_decode($order_info['telephone'], ENT_QUOTES, 'UTF-8');
            $data['billaddress'] = html_entity_decode($order_info['payment_address_1'], ENT_QUOTES, 'UTF-8');
            $data['billcountry'] = html_entity_decode($order_info['payment_iso_code_2'], ENT_QUOTES, 'UTF-8');
            $data['billprovince'] = html_entity_decode($order_info['payment_zone'], ENT_QUOTES, 'UTF-8');
            $data['billcity'] = html_entity_decode($order_info['payment_city'], ENT_QUOTES, 'UTF-8');
            $data['billpost'] = html_entity_decode($order_info['payment_postcode'], ENT_QUOTES, 'UTF-8');
            $data['deliveryname'] = html_entity_decode($order_info['shipping_firstname'] . $order_info['shipping_lastname'], ENT_QUOTES, 'UTF-8');
            $data['deliveryaddress'] = html_entity_decode($order_info['shipping_address_1'], ENT_QUOTES, 'UTF-8');
            $data['deliverycity'] = html_entity_decode($order_info['shipping_city'], ENT_QUOTES, 'UTF-8');
            $data['deliverycountry'] = html_entity_decode($order_info['shipping_iso_code_2'], ENT_QUOTES, 'UTF-8');
            $data['deliveryprovince'] = html_entity_decode($order_info['shipping_zone'], ENT_QUOTES, 'UTF-8');
            $data['deliveryemail'] = $order_info['email'];
            $data['deliveryphone'] = html_entity_decode($order_info['telephone'], ENT_QUOTES, 'UTF-8');
            $data['deliverypost'] = html_entity_decode($order_info['shipping_postcode'], ENT_QUOTES, 'UTF-8');
            $data['loop_months'] = $this->getMonths();
            $data['loop_years'] = $this->getYears();
            $data['omise'] = $this->model_extension_payment_omise->retrieveOmiseKeys();

            return $this->load->view('extension/payment/omise', $data);
        }
    }


    public function checkout()
    {
        if (isset($this->request->post['omise_token'])) {
           
            require (DIR_SYSTEM . '/library/omise-php/lib/Omise.php');
           
            $this->load->model('extension/payment/omise');
            $this->load->model('checkout/order');

            $omise = array();
            $omise = $this->model_extension_payment_omise->retrieveOmiseKeys();

            $order_id = $this->session->data['order_id'];
            $order_info = $this->model_checkout_order->getOrder($order_id);
            $order_total = $this->currency->format($order_info['total'], $order_info['currency_code'], '', false);

            if ($order_info) {
                try {
                    // Try to create a charge and capture it.
                    $omise_charge = OmiseCharge::create(array(
                        "amount" => $this::amount($order_info['currency_code'], $order_total),
                        "currency" => $this->session->data['currency'],
                        "description" => $this->request->post['description'],
                        "return_uri" => $this->url->link('extension/payment/omise/checkoutcallback&order_id=' . $order_id,"",true),
                        "card" => $this->request->post['omise_token']
                    ), $omise['pkey'], $omise['skey']);

                    // Status: failed.
                    if ($omise_charge['failure_code'] || $omise_charge['failure_code']) {
                        throw new Exception($omise_charge['failure_code'] . ': ' . $omise_charge['failure_code'], 1);
                    }

                    $this->model_extension_payment_omise->addChargeTransaction($order_id, $omise_charge['id']);

                    if ($this->config->get('payment_omise_3ds')) {
                        
                        // Status: processing.
                        $order_status_id = $this->config->get('payment_omise_processing_status_id');
                        $this->model_checkout_order->addOrderHistory($order_id, $order_status_id);

                        echo json_encode(array(
                            'omise' => $omise_charge,
                            'capture' => $omise_charge['capture'],
                            'redirect' => $omise_charge['authorize_uri']
                        ));
                        
                    } else {
                        
                        if ($omise_charge['authorized'] && $omise_charge['capture']) {
                            // Status: processed.
                            $order_status_id = $this->config->get('payment_omise_completed_status_id');
                            $this->model_checkout_order->addOrderHistory($order_id, $order_status_id);
                        } else if ($omise_charge['authorized']) {
                            // Status: processing.
                            $order_status_id = $this->config->get('payment_omise_processing_status_id');
                            $this->model_checkout_order->addOrderHistory($order_id, $order_status_id);
                        } else {
                            // Status: failed.
                            throw new Exception('Your charge was failed - ' . $omise_charge['failure_code'] . ': ' . $omise_charge['failure_code'], 1);
                        }

                        echo json_encode(array(
                            'omise' => $omise_charge,
                            'capture' => $omise_charge['capture']
                        ));
                    }
                } catch (Exception $e) {
                    // Status: failed.
                    $error_message = $this->searchErrorTranslation('Payment ' . $e->getMessage());
                    $order_status_id = $this->config->get('payment_omise_failed_status_id');
                    $this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $error_message);
                    echo json_encode(array(
                        'error' => $error_message
                    ));
                }
            } else {
                echo json_encode(array(
                    'error' => 'Cannot find your order, please try again.'
                ));
            }
        } else {
            return 'not authorized';
        }
    }

    /**
     * Retrieve list of months translation
     *
     * @return array
     */
    public function getMonths()
    {
        $months = array();
        for ($index = 1; $index <= 12; $index ++) {
            $month = ($index < 10) ? '0' . $index : $index;
            $months[$month] = $month;
        }
        return $months;
    }

    /**
     * Retrieve array of available years
     *
     * @return array
     */
    public function getYears()
    {
        $years = array();
        $first = date("Y");

        for ($index = 0; $index <= 10; $index ++) {
            $year = $first + $index;
            $years[$year] = $year;
        }
        return $years;
    }
}