<?php

class ModelExtensionPaymentOmise extends Model
{

    public function getMethod($address, $total)
    {
        $this->load->language('extension/payment/omise');

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int) $this->config->get('payment_omise_geo_zone_id') . "' AND country_id = '" . (int) $address['country_id'] . "' AND (zone_id = '" . (int) $address['zone_id'] . "' OR zone_id = '0')");

        if ($this->config->get('payment_omise_total') > $total) {
            $status = false;
        } elseif (! $this->config->get('payment_omise_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        $lang = (int) $this->config->get('config_language_id');
        $payment_omise_title = $this->config->get('payment_omise_title');

        if (isset($payment_omise_title[$lang])) {
            $payment_title = html_entity_decode($payment_omise_title[$lang], ENT_QUOTES, 'UTF-8');
        } else {
            $payment_title = $this->language->get('heading_title');
        }

        $method_data = array();

        if ($status) {
            $method_data = array(
                'code' => 'omise',
                'title' => $payment_title,
                'terms' => '',
                'sort_order' => $this->config->get('payment_omise_sort_order')
            );
        }

        return $method_data;
    }

    public function retrieveOmiseKeys()
    {
        if ($this->config->get('payment_omise_status') && $this->config->get('payment_omise_test')) {
            $keys = array(
                'pkey' => $this->config->get('payment_omise_pkey_test'),
                'skey' => $this->config->get('payment_omise_skey_test')
            );
        } else if ($this->config->get('payment_omise_status')) {
            $keys = array(
                'pkey' => $this->config->get('payment_omise_pkey'),
                'skey' => $this->config->get('payment_omise_skey')
            );
        } else {
            $keys = array(
                'pkey' => '',
                'skey' => ''
            );
        }
        return $keys;
    }

    public function addChargeTransaction($order_id, $charge_id)
    {
        $this->db->query("INSERT into `" . DB_PREFIX . "omise_charge` SET order_id = '" . $order_id . "', omise_charge_id = '" . $charge_id . "', date_added = NOW()");
    }

    public function getChargeTransaction($order_id = null)
    {
        if ($order_id) {
            return $this->db->query("SELECT * FROM `" . DB_PREFIX . "omise_charge` WHERE order_id = '" . (int) $order_id . "'");
        } else {
            return $this->db->query("SELECT * FROM `" . DB_PREFIX . "omise_charge`");
        }
    }
}
