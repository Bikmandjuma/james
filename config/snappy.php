<?php

return [
    'pdf' => [
        'enabled' => true,
        'binary'  => env('SNAPPY_PDF_BINARY', 'C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe'),
        'options' => [
            'no-outline' => true,
        ],
    ],
    'image' => [
        'enabled' => true,
        'binary'  => env('SNAPPY_IMAGE_BINARY', 'C:\\Program Files\\wkhtmltoimage\\bin\\wkhtmltoimage.exe'),
        'options' => [],
    ],
];
