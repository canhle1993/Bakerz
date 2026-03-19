<?php

return [
    'contact' => [
        'address' => env('APP_DISPLAY_ADDRESS', '35/6 duong D5, Q. Binh Thanh, TP.HCM'),
        'phone' => env('APP_DISPLAY_PHONE', '1800 1779'),
        'email' => env('APP_DISPLAY_EMAIL', 'hello@example.com'),
    ],

    'store' => [
        'latitude' => (float) env('STORE_LATITUDE', 10.80688612),
        'longitude' => (float) env('STORE_LONGITUDE', 106.71420533),
        'map_zoom' => (int) env('STORE_MAP_ZOOM', 12),
    ],

    'integrations' => [
        'google_maps_api_key' => env('GOOGLE_MAPS_API_KEY'),
        'google_maps_libraries' => env('GOOGLE_MAPS_LIBRARIES', 'places'),
        'power_bi_embed_url' => env('POWERBI_EMBED_URL'),
        'vnpay' => [
            'url' => env('VNPAY_URL', 'https://sandbox.vnpayment.vn/paymentv2/vpcpay.html'),
            'tmn_code' => env('VNPAY_TMN_CODE'),
            'hash_secret' => env('VNPAY_HASH_SECRET'),
            'order_info' => env('VNPAY_ORDER_INFO', 'Bill Payment'),
            'order_type' => env('VNPAY_ORDER_TYPE', 'Bake Payment'),
            'locale' => env('VNPAY_LOCALE', 'vn'),
            'currency' => env('VNPAY_CURRENCY', 'VND'),
            'exchange_rate' => (int) env('VNPAY_EXCHANGE_RATE', 25000),
        ],
    ],

    'mail' => [
        'test_recipient' => env('MAIL_TEST_RECIPIENT', env('MAIL_FROM_ADDRESS')),
    ],
];
