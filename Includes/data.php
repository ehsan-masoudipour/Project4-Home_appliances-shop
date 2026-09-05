<?php
$features = [
    ['icon' => '✓', 'title' => 'ضمانت اصالت کالا', 'desc' => 'اصالت تمام محصولات تضمین می‌شود.'],
    ['icon' => '۷', 'title' => 'هفت روز ضمانت بازگشت', 'desc' => 'خریدی مطمئن و بدون نگرانی.'],
    ['icon' => '+', 'title' => 'مشاوره تخصصی', 'desc' => 'پیش از خرید با کارشناسان مشورت کنید.'],
    ['icon' => '$', 'title' => 'پرداخت امن', 'desc' => 'پرداخت آنلاین کاملاً ایمن.']
];

$brands = ['SAMSUNG', 'LG', 'BOSCH', 'PHILIPS', 'MIELE', 'PANASONIC'];

$categories = [
    [
        'name' => 'یخچال و فریزر',
        'image' => 'https://images.unsplash.com/photo-1584568694244-14fbdf83bd30?auto=format&fit=crop&w=900&q=90',
        'id' => 'refrigerators'
    ],
    [
        'name' => 'لباسشویی',
        'image' => 'https://images.unsplash.com/photo-1626806787461-102c1bfaaea1?auto=format&fit=crop&w=900&q=90',
        'id' => 'washing'
    ],
    [
        'name' => 'تلویزیون',
        'image' => 'https://images.unsplash.com/photo-1593784991095-a205069470b6?auto=format&fit=crop&w=900&q=90',
        'id' => 'television'
    ],
    [
        'name' => 'لوازم آشپزخانه',
        'image' => 'https://images.unsplash.com/photo-1556911220-bff31c812dba?auto=format&fit=crop&w=900&q=90',
        'id' => 'kitchen'
    ]
];

$navItems = [
    ['title' => 'صفحه اصلی', 'link' => '#home', 'active' => true, 'id' => 'nav-home'],
    ['title' => 'دسته‌بندی محصولات', 'link' => '#categories', 'active' => false, 'id' => 'nav-categories'],
    ['title' => 'آشپزخانه', 'link' => '#kitchen', 'active' => false, 'id' => 'nav-kitchen'],
    ['title' => 'تلویزیون', 'link' => '#television', 'active' => false, 'id' => 'nav-television'],
    ['title' => 'یخچال و فریزر', 'link' => '#refrigerators', 'active' => false, 'id' => 'nav-refrigerator'],
    ['title' => 'لباسشویی', 'link' => '#washing', 'active' => false, 'id' => 'nav-washing'],
    ['title' => 'محصولات', 'link' => 'products.php', 'active' => false, 'id' => 'products'],
    ['title' => 'پیشنهادهای ویژه', 'link' => '#offers', 'active' => false, 'special' => true, 'id' => 'nav-offers'],
];
?>