<?php
// Heading
$_['heading_title']      = 'Midtrans Specific Payment Method';

// Text
$_['text_extension']	 = 'Extensions';
$_['text_payment']       = 'Payment';
$_['text_success']       = 'Success: You have modified Midtrans Specific Payment Method configuration!';
$_['text_snapbin']     = '<a href="https://midtrans.com" target="_blank"><img src="view/image/payment/midtrans.png" width="120px" alt="Midtrans" title="Midtrans" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_live']          = 'production';
$_['text_sandbox']       = 'sandbox';
$_['text_edit']          = 'Configure Midtrans Midtrans Specific Payment Method';

// Entry
$_['entry_environment']  = 'Environment'; // v2 API only
$_['entry_merchant_id']  = 'Merchant Id'; // v2 API only
$_['entry_client_key']   = 'Client Key'; // v2 API only
$_['entry_server_key']   = 'Server Key'; // v2 API only
$_['entry_bin_number']   = 'Bin Number'; // v2 API only
$_['entry_order_status'] = 'Order Status';
$_['entry_savecard']     = 'Save Card';
$_['entry_geo_zone']     = 'Geo Zone';
$_['entry_status']       = 'Status';
$_['entry_sort_order']   = 'Sort Order:';
$_['entry_custom_field'] = 'Custom Field';
$_['entry_currency_conversion'] = 'Currency conversion to IDR';
$_['entry_display_name'] = 'Display name';
$_['entry_acq_bank']	 = 'Acquiring Bank';
$_['entry_3ds'] = '3D Secure';
$_['entry_enabled_payments'] = 'Allowed Payment Method';
$_['entry_expiry']   	 = 'Custom Expire';
$_['entry_mixpanel']	 = 'Midtrans Mixpanel';
$_['entry_success_mapping'] = 'Success Order Status';
$_['entry_pending_mapping'] = 'Pending Order Status';
$_['entry_failure_mapping'] = 'Failure Order Status';
$_['entry_status_failed'] = 'Failure Order Status';
$_['entry_status_success'] = 'Success Order Status';
$_['entry_display_name'] = 'Display name:';
$_['entry_redirect'] = 'Redirect Payment Page';

// Help
$_['help_pending_mapping'] = 'Change to the following order status once the payment pending';
$_['help_failure_mapping'] = 'Change to the following order status once the payment failure';
$_['help_success_mapping'] = 'Change to the following order status once the payment success';
$_['help_savecard'] = 'This will allow your customer to save their card on the payment popup, for faster payment flow on the following purchase.';
$_['help_expiry'] = 'This will allow you to set custom duration on how long the transaction available to be paid.';
$_['help_custom_field'] = 'This will allow you to set custom fields that will be displayed on Midtrans dashboard.';
$_['help_redirect'] = 'This will redirect customer to Midtrans hosted payment page instead of popup payment page on your website.';

// Error
$_['error_permission']   = 'Warning: You do not have permission to modify Snapbin!';
$_['error_merchant_id']	 = 'Merchant Id is required!';
$_['error_client_key']   = 'Client Key is required!';
$_['error_server_key']   = 'Server Key is required!';
$_['error_currency_conversion'] = 'Currency conversion rate is required when IDR currency is not installed in the system!';
$_['error_display_name'] = 'Please specify a name for this payment method!';
?>