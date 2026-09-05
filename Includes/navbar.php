<!-- =====================================================
    TOP BAR
===================================================== -->

<div class="top-bar py-2">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center">

            <div>
                ارسال رایگان برای سفارش‌های بالای 43 میلیون تومان
            </div>

            <div class="d-flex gap-4">

                <a href="Order-tracking.php">
                    پیگیری سفارش
                </a>

                <a href="guide.php">
                    راهنمای خرید
                </a>

                <a href="contact.php">
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
                        href="register.php"
                        id="account-button"
                        class="header-action"
                    >

                        <span class="header-action-icon">
                            A
                        </span>

                        <span class="header-action-text">
                            ورود / ثبت نام
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
                        class="nav-link <?php echo ( $navItem['active'] ) ? 'active' : ''; ?> <?php echo isset( $navItem['special'] ) ? 'nav-offer' : ''; ?>"
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