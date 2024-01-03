<?php

/**
 * Settings for CyberSource Online Gateway.
 *
 * @package Abzer
 */
defined('ABSPATH') || exit;

return array(
	'enabled' => array(
		'title' => __('Enable/Disable', 'woocommerce'),
		'label' => __('Enable Recurrente Payment Gateway', 'woocommerce'),
		'type' => 'checkbox',
		'default' => 'no',
	),
	'title' => array(
		'title' => __('Title', 'woocommerce'),
		'type' => 'text',
		'description' => __('The title which the user sees during checkout.', 'woocommerce'),
		'default' => __('Recurrente Payment Gateway', 'woocommerce'),
	),
	'description' => array(
		'title' => __('Description', 'woocommerce'),
		'type' => 'textarea',
		'css' => 'width: 400px;height:60px;',
		'description' => __('The description which the user sees during checkout.', 'woocommerce'),
		'default' => __('You will be redirected to Recurrente payment gateway.', 'woocommerce'),
	),
	'order_status' => array(
		'title' => __('Status of new order', 'woocommerce'),
		'type' => 'select',
		'class' => 'wc-enhanced-select',
		'options' => array(
			'recurrente_pending' => __('Recurrente Pending', 'woocommerce'),
		),
		'default' => 'recurrente_pending',
	),
	'access_key' => array(
		'title' => __('Access Key', 'woocommerce'),
		'type' => 'text',
	),
	'secret_key' => array(
		'title' => __('Secret Key', 'woocommerce'),
		'type' => 'textarea',
		'css' => 'width: 400px;height:50px;',
	),
	'trescuotas' => array(
		'title' => __('% para 3 cuotas', 'woocommerce'),
		'type' => 'checkbox',
		'label'=>'a 3 Cuotas',
		'description' => __('El porcentaje a cargar en el valor cuando se selecciona 3 cuotas.', 'woocommerce'),
		'default' => __('8', 'woocommerce'),
	),
	'seiscuotas' => array(
		'title' => __('% para 6 cuotas', 'woocommerce'),
		'type' => 'checkbox',
		'label'=>'a 6 Cuotas',
		'description' => __('El porcentaje a cargar en el valor cuando se selecciona 6 cuotas.', 'woocommerce'),
		'default' => __('9', 'woocommerce'),
	),
	'docecuotas' => array(
		'title' => __('% para 12 cuotas', 'woocommerce'),
		'type' => 'checkbox',
		'label'=>'a 12 Cuotas',
		'description' => __('El porcentaje a cargar en el valor cuando se selecciona 12 cuotas.', 'woocommerce'),
		'default' => __('10', 'woocommerce'),
	),
	'dieciochocuotas' => array(
		'title' => __('% para 18 cuotas', 'woocommerce'),
		'type' => 'checkbox',
		'label'=>'a 18 Cuotas',
		'description' => __('El porcentaje a cargar en el valor cuando se selecciona 18 cuotas.', 'woocommerce'),
		'default' => __('14', 'woocommerce'),
	),
	'debug' => array(
		'title' => __('Debug Log', 'woocommerce'),
		'type' => 'checkbox',
		'label' => __('Enable logging', 'woocommerce'),
		'description' => sprintf(__('Log file will be %s', 'woocommerce'), '<code>' . WC_Log_Handler_File::get_log_file_path('recurrente') . '</code>'),
		'default' => 'no',
	),
	'error_msg' => array(
		'title' => __('Error message', 'woocommerce'),
		'type' => 'text',
		'default' => 'Opps, ocurrio un error.',
	),
);
