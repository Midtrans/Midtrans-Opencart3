<?php
// Heading
$_['heading_title']      = 'Midtrans';

// Text
$_['text_extension']	 = 'Extensions';
$_['text_payment']       = 'Payment';
$_['text_success']       = 'Success: You have modified Midtrans configuration!';
$_['text_snap']     = '<a href="https://midtrans.com" target="_blank"><img src="view/image/payment/midtrans.png" width="120px" alt="Midtrans" title="Midtrans" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_live']          = 'production';
$_['text_sandbox']       = 'sandbox';
$_['text_successful']    = 'Always Successful';
$_['text_fail']          = 'Always Fail';
$_['text_edit']          = 'Configure Midtrans';

// Entry
$_['entry_environment']  = 'Environment'; // v2 API only
$_['entry_merchant_id']  = 'Merchant Id'; // v2 API only
$_['entry_client_key']   = 'Client Key'; // v2 API only
$_['entry_server_key']   = 'Server Key'; // v2 API only
$_['entry_order_status'] = 'Order Status';
$_['entry_savecard']     = 'Save Card';
$_['entry_geo_zone']     = 'Geo Zone';
$_['entry_status']       = 'Status';
$_['entry_sort_order']   = 'Sort Order:';
$_['entry_expiry']   	 = 'Custom Expire';
$_['entry_custom_field'] = 'Custom Field';
$_['entry_currency_conversion'] = 'Currency conversion to IDR';
$_['entry_snap_success_mapping'] = 'Map Payment Success Status to Order Status:';
$_['entry_snap_challenge_mapping'] = 'Map Payment Challenge Status to Order Status:';
$_['entry_snap_failure_mapping'] = 'Map Payment Failure Status to Order Status:';
$_['entry_display_name'] = 'Display name';

// Help
$_['help_savecard'] = 'This will allow your customer to save their card on the payment popup, for faster payment flow on the following purchase.';
$_['help_expiry'] = 'This will allow you to set custom duration on how long the transaction available to be paid.';
$_['help_custom_field'] = 'This will allow you to set custom fields that will be displayed on Midtrans dashboard.';

// Error
$_['error_permission']   = 'Warning: You do not have permission to modify Snap!';
$_['error_merchant_id']	 = 'Merchant Id is required!';
$_['error_client_key']   = 'Client Key is required!';
$_['error_server_key']   = 'Server Key is required!';
$_['error_currency_conversion'] = 'Currency conversion rate is required when IDR currency is not installed in the system!';
$_['error_display_name'] = 'Please specify a name for this payment method!';
?>