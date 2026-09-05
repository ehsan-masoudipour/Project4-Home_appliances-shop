<?php
include( 'Includes/functions-Special.php' );
require( 'Includes/data.php' );
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
    <link rel="stylesheet" href="Styles/Shop-BackendD-ehsan.css">
</head>
<body>
    <?php require( 'Includes/navbar.php' );?>
    <?php require( 'Includes/Hero.php' ); ?>
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
                        <?php echo $feature['icon']; ?>
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
    <?php require( 'Includes/categories.php' ) ?>
    <?php require( 'Includes/products-special.php' ); ?>
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
                    href="products.php"
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
    <?php require( 'Includes/footer.php' ); ?>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>