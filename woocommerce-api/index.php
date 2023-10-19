<?php


require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wpmet/metform',
    'ck_994328f9d17f5fce6146abeaa2945843295ee776',
    'cs_89c0a2110b5e052952ef878e82f16d95fb45aeec',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'verify_ssl' => false,
    ]
);
// var_dump($woocommerce);
// exit;
$data = [
    'payment_method' => 'bacs',
    'payment_method_title' => 'Direct Bank Transfer',
    'set_paid' => true,
    'billing' => [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'address_1' => '969 Market',
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US',
        'email' => 'john.doe@example.com',
        'phone' => '(555) 555-5555'
    ],
    'shipping' => [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'address_1' => '969 Market',
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US'
    ],
    'line_items' => [
        [
            'product_id' => 1335,
            'quantity' => 2
        ],
        // [
        //     'product_id' => 22,
        //     'variation_id' => 23,
        //     'quantity' => 1
        // ]
    ],
    'shipping_lines' => [
        [
            'method_id' => 'flat_rate',
            'method_title' => 'Flat Rate',
            'total' => '10.00'
        ]
    ]
];

print_r($woocommerce->post('orders', $data));












