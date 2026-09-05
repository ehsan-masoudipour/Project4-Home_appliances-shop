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
                    <a href="products.php" class="category-card">
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