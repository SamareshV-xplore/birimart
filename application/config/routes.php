<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'welcome';

$route['default_controller'] = 'customer';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

///////////////////// Customer route start ///////////////////////////

$route['customer/welcome'] = 'Customer/view_welcome';
$route['customer/send_otp'] = 'Customer/view_send_otp';
$route['customer/verify'] = 'Customer/view_verify_otp';
$route['customer/dashboard'] = 'Customer/view_dashboard';
$route['customer/details'] = 'Customer/view_add_name_address';
$route['customer/address'] = 'Customer/view_add_deliver_address';
$route['customer/address/details'] = 'Customer/view_detail_deliver_address';

$route['shop'] = 'Customer/View_shop';
$route['store'] = 'Customer/View_store';
$route['restaurant'] = 'Customer/View_restaurant';

$route['store/products/(:any)'] = 'Customer/View_store_product/$1';
$route['products/(:any)'] = 'Customer/view_product_details/$1';







////////////////////// Vendor Routes start ///////////////////////////////



$route['vendor/login'] = 'Vendor/view_login';
$route['vendor/dashboard'] = 'Vendor/view_dashboard';
$route['vendor/inventory'] = 'Vendor/view_inventory';
$route['vendor/store'] = 'Vendor/view_store_setting';
$route['vendor/product/express'] = 'Vendor/view_add_product_express';
$route['vendor/product/add'] = 'Vendor/view_add_products';
$route['vendor/product/list'] = 'Vendor/view_products_list';

// Vendor Dashboard Data Getting API Routes
// ========================================
$route["vendor/dashboard/orders_list"] = "Vendor/get_dashboard_orders_list";



// Add Product Express 

$route['get_brand_by_category'] = 'Vendor/get_brand_name_by_category_id';
$route['get_selected_express_product'] = 'Vendor/get_selected_express_add_product';
$route['get_master_product_by_category'] = 'Vendor/get_product_by_category_from_master_table';
$route['add_product_express'] = 'Vendor/add_product_express';

// Add Products

$route['add_product_already_exist'] = 'Vendor/add_product_when_already_exist';
$route['get_product_name_exist'] = 'Vendor/get_product_name_if_exist';
$route['get_brand_according_category'] = 'Vendor/get_brand_according_category_id';

// Product List

$route['display_product'] = 'Vendor/display_product';
$route['display_product_for_mobile'] = 'Vendor/search_product_for_mobile';

// Inventory 

$route['display_inventory_items'] = 'Vendor/display_inventory_items';
$route['edit_inventory_product'] = 'Vendor/fetch_product_details_for_edit';
$route['update_inventory_product'] = 'Vendor/update_inventory_product_details';
$route['delete_inventory_product'] = 'Vendor/delete_inventory_product';

// Store settings

$route['active_free_delivery'] = 'Vendor/active_free_delivery';
$route['deactive_free_delivery'] = 'Vendor/deactive_free_delivery';
$route['active_home_delivery'] = 'Vendor/active_home_delivery';
$route['deactive_home_delivery'] = 'Vendor/deactive_home_delivery';
$route['active_pickup_from_store'] = 'Vendor/active_pickup_from_store';
$route['deactive_pickup_from_store'] = 'Vendor/deactive_pickup_from_store';
$route['active_stock_management'] = 'Vendor/active_stock_management';
$route['deactive_stock_management'] = 'Vendor/deactive_stock_management';
$route['active_cash_on_delivery'] = 'Vendor/active_cod';
$route['deactive_cash_on_delivery'] = 'Vendor/deactive_cod';
$route['active_online_payment'] = 'Vendor/active_online_payment';
$route['deactive_online_payment'] = 'Vendor/deactive_online_payment';
$route['update_delivery_charges'] = 'Vendor/update_delivery_charges';
$route['update_bank_details'] = 'Vendor/update_bank_details';


