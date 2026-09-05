<?php
$products = [
    [
        'name' => 'ماشین لباسشویی ال جی 9 کیلویی مدل F4R5VYG0W',
        'category' => 'لوازم شست‌وشو',
        'price' => 163000000,
        'discount' => 4,
        'image' => 'https://www.technolife.com/image/color_image_TLP-517227_ffffff_20c3c2c4-15bd-4218-95a5-83cc8ba7b676.png',
        'rating' => 5,
        'reviews' => 114,
        'badge' => '4% تخفیف'
    ],
    [
        'name' => 'اسپرسو ساز خانگی 1.5 لیتری مباشی مدل ME-ECM2118، نیمه اتوماتیک با مصرف پودر قهوه',
        'category' => 'لوازم آشپزخانه',
        'price' => 16576590,
        'discount' => 15,
        'image' => 'https://dkstatics-public.digikala.com/digikala-products/ae61019ac9918a81150c8998bb38d87e2ae977e7_1786910227.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/format,webp/quality,q_80',
        'rating' => 4,
        'reviews' => 42,
        'badge' => 'ویژه'
    ],
    [
        'name' => 'تلویزیون هوشمند جی پلاس مدل GTV-32SD648N سایز 32 اینچ',
        'category' => 'صوتی تصویری',
        'price' => 38000000,
        'discount' => 5,
        'image' => 'https://www.technolife.com/image/color_image_TLP-471607_1a1a1a_2cf92d81-9e50-4367-b9ec-b72f1ddae2e8.png',
        'rating' => 4,
        'reviews' => 40,
        'badge' => 'پرطرف دار'
    ],
    [
        'name' => 'ساید بای ساید دوو سری Prime 3DR IOT مدل SXi30-20W',
        'category' => 'سرمایشی',
        'price' => 267000000,
        'discount' => 3,
        'image' => 'https://daewoocenter.com/wp-content/uploads/2024/05/SXi30-20W-1.jpg',
        'rating' => 4,
        'reviews' => 66,
        'badge' => 'جدید - %3 تخفیف'
    ]
];
$callback_products = fn( array $product ) :bool => $product['price'] > 36000000;

function filteredProducts ( array $products , ?callable $function ) :array{
    $result = [];
    foreach( $products as $product ){
        if( $function( $product ) ){
            $result[] = $product;
        }
    }
    return $result;
}
$result_filteredProducts = filteredProducts ( $products , $callback_products );

function calculatePrice( float $price, int $discount ) :float{
    return $price - ( $price * $discount / 100 );
}

$formatPrice = fn( float $price ) :string => number_format( $price ) . ' تومان';

function renderStars( int $rating ) :string{
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $stars .= '★';
        } else {
            $stars .= '☆';
        }
    }
    return $stars;
}
?>