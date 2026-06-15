<?php

return [
    'name' => env('SOS_NAME', 'SOS wilde dieren'),
    'tagline' => 'Opvangcentrum voor vogels en wilde dieren',
    'url' => env('SOS_URL', 'https://www.sos-wildedieren.be'),
    'phone' => env('SOS_PHONE', '0468 / 28 23 68'),
    'phone_href' => env('SOS_PHONE_HREF', '+32468282368'),
    'email' => env('SOS_EMAIL', 'info@soswildedieren.be'),
    'address' => env('SOS_ADDRESS', 'Hoge Buizemont 219 B, 9500 Geraardsbergen'),
    'street_address' => env('SOS_STREET_ADDRESS', 'Hoge Buizemont 219 B'),
    'locality' => env('SOS_LOCALITY', 'Geraardsbergen'),
    'postal_code' => env('SOS_POSTAL_CODE', '9500'),
    'country' => env('SOS_COUNTRY', 'BE'),
    'opening_hours' => env('SOS_OPENING_HOURS', 'Dagelijks 09:00 - 17:00'),
    'donation_url' => env('SOS_DONATION_URL'),
    'facebook_url' => env('SOS_FACEBOOK_URL', 'https://www.facebook.com/SOS-wilde-dieren-426836217474034/'),
    'contact' => [
        'recipient' => env('SOS_CONTACT_RECIPIENT', env('SOS_EMAIL', 'info@soswildedieren.be')),
    ],
];
