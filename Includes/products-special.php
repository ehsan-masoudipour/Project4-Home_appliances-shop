<!-- =====================================================
    PRODUCTS-SPECIAL
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
            <?php foreach( $result_filteredProducts as $product ) :
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
                                    <?php echo $formatPrice( $product['price'] ) ?>
                                </div>

                                <div class="price">
                                    <?php echo $formatPrice( $calculateDiscountedPrice ) ?>
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