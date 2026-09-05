<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>پیگیری سفارش | EHSAN-NOVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="Styles/Order-tracking.css">
</head>
<body>

    <div class="container">

        <div class="track-card">

            <!-- ==========================================
                 HEADER
            ========================================== -->
            <div class="track-header">
                <div class="brand">EHSAN<span>-NOVA</span></div>
                <p class="subtitle">وضعیت سفارش خود را پیگیری کنید</p>
            </div>

            <!-- ==========================================
                 SEARCH FORM
            ========================================== -->
            <form class="track-form">
                <input type="text" placeholder="کد سفارش را وارد کنید..." />
                <button type="submit">پیگیری سفارش</button>
            </form>

            <!-- ==========================================
                 ORDER INFO (SAMPLE)
            ========================================== -->
            <div class="order-info">
                <span class="item"><strong>کد سفارش:</strong> #ORD-2026-009</span>
                <span class="item"><strong>تاریخ:</strong> ۱۴۰۴/۰۶/۱۰</span>
                <span class="item"><strong>مبلغ:</strong> ۱۲,۴۵۰,۰۰۰ تومان</span>
            </div>

            <!-- ==========================================
                 STATUS STEPS
            ========================================== -->
            <div class="steps">

                <div class="step">
                    <div class="circle done">✓</div>
                    <span class="label done">پرداخت</span>
                </div>

                <div class="step">
                    <div class="circle done">✓</div>
                    <span class="label done">آماده‌سازی</span>
                </div>

                <div class="step">
                    <div class="circle active">●</div>
                    <span class="label active">ارسال</span>
                </div>

                <div class="step">
                    <div class="circle">○</div>
                    <span class="label">تحویل</span>
                </div>

            </div>

        </div>

    </div>

</body>
</html>