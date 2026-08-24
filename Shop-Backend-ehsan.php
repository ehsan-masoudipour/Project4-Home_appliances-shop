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
    ['title' => 'نظافت', 'link' => '#cleaning', 'active' => false, 'id' => 'nav-cleaning'],
    ['title' => 'پیشنهادهای ویژه', 'link' => '#offers', 'active' => false, 'special' => true, 'id' => 'nav-offers'],
    ['title' => 'سبد خرید', 'link' => '#cart', 'active' => false, 'id' => 'nav-cart']
];

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
        'discount' => 18,
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

function calculatePrice($price, $discount) {
    return $price - ($price * $discount / 100);
}

function formatPrice($price) {
    return number_format($price) . ' تومان';
}

function renderStars($rating) {
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
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHSAN-NOVA | فروشگاه تخصصی لوازم خانگی</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="Shop-Backend-ehsan.css">
</head>Shop-Backend.css
<body>
<!-- =====================================================
    TOP BAR
===================================================== -->

<div class="top-bar py-2">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center">

            <div>
                ارسال رایگان برای سفارش‌های بالای ۵ میلیون تومان
            </div>

            <div class="d-flex gap-4">

                <a href="#orders">
                    پیگیری سفارش
                </a>

                <a href="#guide">
                    راهنمای خرید
                </a>

                <a href="#contact">
                    تماس با ما
                </a>

            </div>

        </div>

    </div>

</div>


<!-- =====================================================
    HEADER
===================================================== -->

<header
    class="main-header"
    id="home"
>

    <div class="container py-4">

        <div class="row align-items-center g-3">


            <div class="col-lg-2">

                <a
                    href="#home"
                    class="brand"
                >

                    EHSAN<span>-NOVA</span>

                    <div class="brand-subtitle">
                        PREMIUM HOME APPLIANCES
                    </div>

                </a>

            </div>


            <div class="col-lg-7">

                <form
                    class="search-box d-flex"
                    id="search-form"
                >

                    <input
                        type="search"
                        class="form-control"
                        placeholder="جستجوی محصول، برند یا دسته‌بندی..."
                        id="search-input"
                    >

                    <button
                        type="submit"
                        id="search-button"
                    >
                        جستجو
                    </button>

                </form>

            </div>


            <div class="col-lg-3">

                <div class="header-actions">


                    <a
                        href="#account"
                        id="account-button"
                        class="header-action"
                    >

                        <span class="header-action-icon">
                            A
                        </span>

                        <span class="header-action-text">
                            حساب کاربری
                        </span>

                    </a>


                    <a
                        href="#wishlist"
                        id="wishlist-button"
                        class="header-action"
                    >

                        <span class="header-action-icon">
                            H
                        </span>

                        <span class="header-action-text">
                            علاقه‌مندی
                        </span>

                    </a>


                    <a
                        href="#cart"
                        id="cart-button"
                        class="header-action"
                    >

                        <span class="header-action-icon">
                            C
                        </span>

                        <span class="header-action-text">
                            سبد خرید
                        </span>

                        <span
                            class="cart-count"
                            id="cart-count"
                        >
                            7
                        </span>

                    </a>


                </div>

            </div>

        </div>

    </div>


    <!-- =================================================
        NAVBAR
    ================================================= -->

    <div class="main-navbar">

        <nav class="navbar navbar-expand-lg">

            <div class="container">


                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNav"
                >

                    <span class="navbar-toggler-icon"></span>

                </button>


                <div
                    class="collapse navbar-collapse"
                    id="mainNav"
                >

                    <ul class="navbar-nav w-100">
                    <?php foreach ($navItems as $navItem): ?>
                        <li class="nav-item <?php echo isset($navItem['special']) ? 'ms-lg-auto' : ''; ?>">
                    <a 
                        href="<?php echo $navItem['link']; ?>" 
                        class="nav-link <?php echo ( $navItem['active'] ) ? 'active' : ''; ?> <?php echo isset($navItem['special']) ? 'nav-offer' : ''; ?>"
                        id="<?php echo $navItem['id']; ?>"
                    >
                    <?php echo $navItem['title']; ?>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>
                </div>

            </div>

        </nav>

    </div>

</header>


<!-- =====================================================
    HERO
===================================================== -->

<section
    class="hero"
    id="hero"
>


    <img
        class="hero-image"
        src="https://images.squarespace-cdn.com/content/v1/63cddd050d948757a7704478/9b5bb7af-18c2-433f-889f-a1bd8a49e308/Inzane_Aesthetic_modern_luxury_kitchen_cabinetry_design_layout_ad8e6d5f-c321-4f03-8a8b-52bb2da99523.jpg"
        alt="طراحی لوکس آشپزخانه مدرن EHSAN-NOVA"
    >


    <div class="hero-overlay"></div>


    <div class="container">

        <div class="hero-content">


            <div class="hero-label">
                EHSAN-NOVA COLLECTION 2026
            </div>


            <h1>

                خانه‌ای مدرن،
                <span>
                    انتخابی هوشمند
                </span>

            </h1>


            <p>

                مجموعه‌ای منتخب از جدیدترین لوازم خانگی،
                تجهیزات آشپزخانه و محصولات هوشمند،
                با ضمانت اصالت و خدمات حرفه‌ای EHSAN-NOVA.

            </p>


            <div class="hero-buttons">

                <a
                    href="#products"
                    id="hero-products-button"
                    class="btn-main"
                >
                    مشاهده محصولات
                </a>

                <a
                    href="#offers"
                    id="hero-offers-button"
                    class="btn-secondary"
                >
                    پیشنهادهای ویژه
                </a>

            </div>


            <div class="hero-stats">


                <div class="hero-stat">

                    <strong>
                        +۱۲,۰۰۰
                    </strong>

                    <span>
                        محصول موجود
                    </span>

                </div>


                <div class="hero-stat">

                    <strong>
                        +۸۰
                    </strong>

                    <span>
                        برند معتبر
                    </span>

                </div>


                <div class="hero-stat">

                    <strong>
                        +۵۰K
                    </strong>

                    <span>
                        مشتری راضی
                    </span>

                </div>


            </div>


        </div>

    </div>

</section>


<!-- =====================================================
    FEATURES
===================================================== -->

<section
    class="features-section"
    id="services"
>

    <div class="container">

        <div class="row g-3">
        <?php foreach( $features as $feature ) : ?>
            <div class="col-6 col-lg-3">

                <div class="feature-box">

                    <div class="feature-icon">
                        <?php echo $feature['icon'] ?>
                    </div>

                    <h5>
                        <?php echo $feature['title'] ?>
                    </h5>

                    <p>
                        <?php echo $feature['desc'] ?>
                    </p>

                </div>

            </div>
        <?php endforeach; ?>
        </div>

    </div>

</section>


<!-- =====================================================
    CATEGORIES
===================================================== -->

<section class="py-5" id="categories">
    <div class="container py-5">
        <div class="mb-5">
            <h2 class="section-title">دسته‌بندی محصولات</h2>
            <p class="section-description">هر آنچه برای یک خانه مدرن نیاز دارید.</p>
            <div class="gold-line"></div>
        </div>

        <div class="row g-4">
            <?php foreach ($categories as $category): ?>
                <div class="col-6 col-lg-3" id="<?php echo $category['id']; ?>">
                    <a href="#products" class="category-card">
                        <img src="<?php echo $category['image']; ?>" alt="<?php echo $category['name']; ?>">
                        <div class="category-overlay">
                            <div>
                                <h4><?php echo $category['name']; ?></h4>
                                <span>مشاهده محصولات</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
    PRODUCTS
===================================================== -->

<section
    class="py-5"
    style="background:#f8f9fa"
    id="products"
>

    <div class="container py-5">


        <div class="mb-5">

            <h2 class="section-title">
                محصولات منتخب
            </h2>

            <p class="section-description">
                انتخابی از میان محبوب‌ترین محصولات EHSAN-NOVA.
            </p>

            <div class="gold-line"></div>

        </div>


        <div class="row g-4">


            <!-- PRODUCTS -->
            <?php foreach( $products as $product ) :
            $calculateDiscountedPrice = calculatePrice( $product['price'] , $product['discount'] );
            $getStarRating            = renderStars( $product['rating'] );
            ?>
            <div
                class="col-6 col-lg-3"
                id="product-1"
            >

                <div class="product-card">

                    <div class="product-image">

                        <span class="product-badge">
                            <?php echo $product['badge'] ?>
                        </span>

                        <a
                            href="#wishlist"
                            class="wishlist"
                            id="wishlist-product-1"
                        >
                            ♡
                        </a>

                        <img
                            src=<?php echo $product['image'] ?>
                            alt="ماشین لباسشویی"
                        >

                    </div>

                    <div class="product-content">

                        <div class="product-category">
                            <?php echo $product['category'] ?>
                        </div>

                        <h3 class="product-title mt-2">
                            <?php echo $product['name'] ?>
                        </h3>

                        <div class="rating">
                            <?php echo $getStarRating ?>
                            <span class="text-muted">
                                (<?php echo $product['reviews'] ?>)
                            </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-end mt-3">

                            <div>

                                <div class="old-price">
                                    <?php echo formatPrice( $product['price'] ) ?>
                                </div>

                                <div class="price">
                                    <?php echo formatPrice( $calculateDiscountedPrice ) ?>
                                </div>

                            </div>

                            <a
                                href="#cart"
                                class="add-cart"
                                id="add-cart-1"
                            >
                                افزودن
                            </a>

                        </div>

                    </div>

                </div>

            </div>
            <?php endforeach; ?>
        </div>

    </div>

</section>


<!-- =====================================================
    PROMO
===================================================== -->

<section
    class="py-5"
    id="offers"
>

    <div class="container py-4">

        <div class="promo-card">
           <!--  src="https://images.squarespace-cdn.com/content/v1/63cddd050d948757a7704478/9b5bb7af-18c2-433f-889f-a1bd8a49e308/Inzane_Aesthetic_modern_luxury_kitchen_cabinetry_design_layout_ad8e6d5f-c321-4f03-8a8b-52bb2da99523.jpg" -->

            <img
            src="https://okno-pol.com/storage/uploads/galeria_zdjec/posty/r-architecture-manvojlquvg-unsplash.jpg?utm_source=chatgpt.com"
            alt="آشپزخانه مدرن EHSAN-NOVA"
            >


            <div class="promo-content">

                <div class="hero-label">
                    EHSAN-NOVA PREMIUM COLLECTION
                </div>

                <h2>
                    آشپزخانه‌ای که
                    برای زندگی مدرن ساخته شده است.
                </h2>

                <p>
                    مجموعه‌ای از تجهیزات حرفه‌ای آشپزخانه
                    با طراحی مدرن، عملکرد هوشمند و کیفیت ممتاز.
                </p>

                <a
                    href="#kitchen"
                    id="premium-kitchen-button"
                    class="btn-main d-inline-block mt-3"
                >
                    مشاهده مجموعه
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     BRANDS
===================================================== -->

<section
    class="py-5"
    id="brands"
>

    <div class="container py-5">

        <div class="text-center mb-5">

            <h2 class="section-title">
                برندهای معتبر
            </h2>

            <p class="section-description">
                انتخابی مطمئن از میان برندهای شناخته‌شده جهانی.
            </p>

        </div>


        <div class="row g-3">
            <?php foreach( $brands as $brand ) : ?>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="brand-box">
                    <?php echo $brand; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

</section>


<!-- =====================================================
     NEWSLETTER
===================================================== -->

<section class="py-5">

    <div class="container">

        <div class="newsletter">

            <div class="row align-items-center g-4">

                <div class="col-lg-6">

                    <div class="hero-label">
                        EHSAN-NOVA NEWSLETTER
                    </div>

                    <h2 class="section-title mt-2">
                        جدیدترین محصولات را از دست ندهید.
                    </h2>

                    <p class="section-description">
                        برای دریافت آخرین پیشنهادها و محصولات جدید
                        در خبرنامه EHSAN-NOVA عضو شوید.
                    </p>

                </div>


                <div class="col-lg-6">

                    <form
                        class="d-flex gap-2"
                        id="newsletter-form"
                    >

                        <input
                            type="email"
                            class="form-control"
                            placeholder="آدرس ایمیل شما"
                            id="newsletter-email"
                        >

                        <button
                            class="btn btn-dark px-4"
                            id="newsletter-submit"
                        >
                            عضویت
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer
    class="pt-5"
    id="contact"
>

    <div class="container">

        <div class="row g-5 pb-5">


            <div class="col-lg-4">

                <a
                    href="#home"
                    class="brand text-white"
                >
                    EHSAN<span>-NOVA</span>
                </a>

                <p class="footer-description mt-3">

                    فروشگاه تخصصی لوازم خانگی با تمرکز بر
                    کیفیت، اصالت کالا و ارائه تجربه‌ای حرفه‌ای
                    در خرید آنلاین.

                </p>

            </div>


            <div class="col-6 col-lg-2">

                <h4 class="footer-title">
                    خرید
                </h4>

                <ul>

                    <li>
                        <a href="#products">
                            همه محصولات
                        </a>
                    </li>

                    <li>
                        <a href="#offers">
                            پیشنهادهای ویژه
                        </a>
                    </li>

                    <li>
                        <a href="#brands">
                            برندها
                        </a>
                    </li>

                </ul>

            </div>


            <div class="col-6 col-lg-2">

                <h4 class="footer-title">
                    خدمات
                </h4>

                <ul>

                    <li>
                        <a href="#services">
                            خدمات مشتریان
                        </a>
                    </li>

                    <li>
                        <a href="#guide">
                            راهنمای خرید
                        </a>
                    </li>

                    <li>
                        <a href="#orders">
                            پیگیری سفارش
                        </a>
                    </li>

                </ul>

            </div>


            <div class="col-6 col-lg-2">

                <h4 class="footer-title">
                    دسته‌بندی
                </h4>

                <ul>

                    <li>
                        <a href="#refrigerators">
                            یخچال
                        </a>
                    </li>

                    <li>
                        <a href="#washing">
                            لباسشویی
                        </a>
                    </li>

                    <li>
                        <a href="#television">
                            تلویزیون
                        </a>
                    </li>

                </ul>

            </div>


            <div class="col-6 col-lg-2">

                <h4 class="footer-title">
                    ارتباط
                </h4>

                <ul>

                    <li>
                        <a href="#contact">
                            تماس با ما
                        </a>
                    </li>

                    <li>
                        <a href="#account">
                            حساب کاربری
                        </a>
                    </li>

                    <li>
                        <a href="#cart">
                            سبد خرید
                        </a>
                    </li>

                </ul>

            </div>


        </div>


        <div class="footer-bottom py-4">

            <div class="d-flex justify-content-between flex-wrap gap-3">

                <span>
                    تمامی حقوق متعلق به EHSAN-NOVA است.
                </span>

                <span>
                    PREMIUM HOME APPLIANCES
                </span>

            </div>

        </div>

    </div>

</footer>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>
