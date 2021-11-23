Official Midtrans SNAP OpenCart Extension
===================================

Midtrans :heart: OpenCart!

This is the official Midtrans extension for the OpenCart E-commerce platform.

### Live Demo
Want to see Midtrans Magento payment plugins in action? We have some demo web-stores for Magento that you can use to try the payment journey directly, click the link below.
* [Midtrans CMS Demo Store](https://docs.midtrans.com/en/snap/with-plugins?id=midtrans-payment-plugin-live-demonstration)

## Compatibility
1. PHP v5.4 and higher
2. Opencart v3.0

## Installation

1. Download and extract the zip file.

2. Locate the root _OpenCart_ directory of your shop via FTP connection.

3. Copy the `admin`, `catalog`, and `system` folders into your _OpenCart's_ root folder, and merge it.

4. In your _OpenCart_ admin area, go to `Extensions` - `Extensions`.

5. Filter by `Payments`, scroll down untill you find `Midtrans`.

6. Click the `Install` green button and edit the plugin.

7. Insert your merchant details.
   * Fill **Display name** with text button that you want to display to customer.
   * Fill **Merchant Id** with your Merchant Id [Midtrans&nbsp;  account](https://dashboard.midtrans.com/settings/config_info/).
   * Select **Environment**, Sandbox is for testing transaction, Production is for real transaction.
   * Fill in the **client key** & **server key** with your corresonding [Midtrans&nbsp;  account](https://dashboard.midtrans.com/settings/config_info/).
   * Note: key for Sandbox & Production is different, make sure you use the correct one.
   * **SUCCESS Order Status** select your desired order status when payment is success (recommended: Processing).
   * **PENDING Order Status** select your desired order status when payment is failure (recommended: Pending).
   * **FAILURE Order Status** select your desired order status when payment is pending (recommended: Canceled).
   * Other configuration are optional, you can leave it as default.
   
8. Login into your Midtrans account and change the following options:

  * **Payment Notification URL** in Settings to `http://[your shop's homepage]/index.php?route=extension/payment/snap/payment_notification`

  * **Finish Redirect URL** in Settings to `http://[your shop’s homepage]/index.php?route=extension/payment/snap/landing_redir&`

  * **Error Redirect URL** in Settings to `http://[your shop’s homepage]/index.php?route=extension/payment/snap/landing_redir&`

  * **Unfinish Redirect URL** in Settings to `http://[your shop’s homepage]/index.php?route=extension/payment/snap/landing_redir&`

## Get help
* Please follow [this step by step guide](https://docs.midtrans.com/en/snap/with-plugins?id=opencart-plugin-installation-and-configuration) for complete configuration. If you have any feedback or request, please [do let us know here](https://docs.midtrans.com/en/snap/with-plugins?id=feedback-and-request).
* [Midtrans sandbox login](https://dashboard.sandbox.midtrans.com)
* [Midtrans production login](https://dashboard.midtrans.com)
* [Midtrans registration](https://account.midtrans.com/register)
* [Midtrans documentation](http://docs.midtrans.com)
* Technical support [support@midtrans.com](mailto:support@midtrans.com)
