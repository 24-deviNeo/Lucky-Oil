<?php
$filter_bar_top = [
    'title' => [
        'dark' => 'OUR',
        'gold' => 'PRODUCTS'
    ],
    'description' => 'Discover our range of high-quality edible oils, fats, margarines and customised food ingredients.',
    'categories' => [
        [
            'category' => 'all',
            'label' => 'ALL PRODUCTS',
            'active' => true
        ],
        [
            'category' => 'cooking-oil',
            'label' => 'COOKING OIL',
            'active' => false
        ],
        [
            'category' => 'margarine',
            'label' => 'MAGARINE & SPREADS',
            'active' => false
        ],
        [
            'category' => 'fat-ghee',
            'label' => 'FAT & GHEE',
            'active' => false
        ]
    ],
    'search' => [
        'placeholder' => 'Search'
    ],
    'sort' => [
        'default_label' => 'Popularity',
        'options' => [
            [
                'value' => 'popularity',
                'label' => 'Popularity',
                'selected' => true
            ],
            [
                'value' => 'newest',
                'label' => 'Newest',
                'selected' => false
            ],
            [
                'value' => 'name_asc',
                'label' => 'Name: A to Z',
                'selected' => false
            ],
            [
                'value' => 'name_desc',
                'label' => 'Name: Z to A',
                'selected' => false
            ]
        ]
    ]
];
?>
