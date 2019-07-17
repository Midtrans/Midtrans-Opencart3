<?php

class ModelExtensionPaymentSnapinst extends Model {
  
  public function getMethod($address, $total) {
		
		$this->load->language('extension/payment/snapinst');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('veritrans_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if ($this->config->get('snap_total') > 0 && $this->config->get('veritrans_total') > $total) {
			$status = false;
		} elseif (!$this->config->get('snap_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();

		if ($status) {
      $method_data = array(
        'code'       => 'snapinst',
        'title'      => $this->config->get('payment_snapinst_display_name'),
		'sort_order' => $this->config->get('payment_snapinst_sort_order'),
		'terms' 	 => ''
      );
    }

    return $method_data;
  }

}
