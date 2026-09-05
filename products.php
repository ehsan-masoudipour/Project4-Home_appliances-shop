<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>محصولات | EHSAN-NOVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="Styles/products.css">
</head>
<body>
    <div class="container">

        <!-- ===== دکمه بازگشت به صفحه اصلی ===== -->
        <div style="margin-bottom: 20px; text-align: right;">
            <a href="Shop-BackendD-ehsan.php" style="
                display: inline-block;
                padding: 10px 24px;
                background: #000000;
                color: #fff;
                border-radius: 40px;
                text-decoration: none;
                font-weight: 600;
                font-size: 14px;
                transition: 0.3s;
                border: 1px solid #0b121f;
            " onmouseover="this.style.backgroundColor='#00a6a6'; this.style.borderColor='#00a6a6';" 
                onmouseout="this.style.backgroundColor='#0b121f'; this.style.borderColor='#0b121f';">
                بازگشت به صفحه اصلی
            </a>
        </div>

        <div class="page-header">
            <div class="brand">EHSAN<span>-NOVA</span></div>
            <p class="subtitle">همه محصولات فروشگاه در یک نگاه</p>
            <div class="line"></div>
        </div>
        <?php require( 'Includes/functions-Allproducts.php' ); ?>
    </div>
</body>
</html>