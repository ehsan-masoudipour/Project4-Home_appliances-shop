        <!-- ==========================================
            ALL PRODUCTS:
        ========================================== -->
        <div class="category-title">محصولات :</div>
        <div class="products-grid">
            <?php foreach( $products as $product ) :
            $calculateDiscountedPrice = calculatePrice( $product['price'] , $product['discount'] );
            $getStarRating            = renderStars( $product['rating'] );
            ?>
            <div class="product-card">
                <div class="image">
                    <img src="https://www.technolife.com/image/color_image_TLP-471607_1a1a1a_2cf92d81-9e50-4367-b9ec-b72f1ddae2e8.png" alt="یخچال" />
                </div>
                <div class="content">
                    <div class="category"><?php echo $product['category'] ?></div>
                    <div class="name"><?php echo $product['name'] ?></div>
                    <div class="rating"> <?php echo $getStarRating ?> <span>(<?php echo $product['reviews'] ?>)</span></div>
                    <div class="price-row">
                        <div>
                            <div class="old-price"> <?php echo $formatPrice( $product['price'] ) ?></div>
                            <div class="price"> <?php echo $formatPrice( $calculateDiscountedPrice ) ?></div>
                        </div>
                        <button class="add-btn">افزودن</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>