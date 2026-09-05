<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ثبت‌نام و ورود | EHSAN-NOVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="Styles/register.css">
</head>
<body>

    <div class="container">

        <div class="auth-card">

            <!-- ==========================================
            RIGHT: LOGIN
            ========================================== -->
            <div class="auth-login">
                <div class="brand">EHSAN<span>-NOVA</span></div>
                <p class="subtitle">ورود به حساب کاربری</p>

                <form>
                    <div class="mb-3">
                        <label class="form-label">کد ملی</label>
                        <input type="text" class="form-control" placeholder="۱۲۳۴۵۶۷۸۹۰" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" placeholder="••••••••" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">نقش شما</label>
                        <select class="form-control">
                            <option value="customer">مشتری</option>
                            <option value="admin">مدیر</option>
                            <option value="staff">کارمند</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" />
                            <label class="form-check-label" for="remember">مرا به خاطر بسپار</label>
                        </div>
                        <a href="#" class="forgot-link">رمز عبور را فراموش کرده‌اید؟</a>
                    </div>

                    <button type="submit" class="btn-login w-100">ورود</button>
                </form>
            </div>

            <!-- ==========================================
                LEFT: SIGN UP (NO ROLE FIELD)
            ========================================== -->
            <div class="auth-signup">
                <div class="brand">EHSAN<span>-NOVA</span></div>
                <p class="subtitle">ایجاد حساب کاربری جدید</p>

                <form>
                    <div class="mb-3">
                        <label class="form-label">نام و نام‌خانوادگی</label>
                        <input type="text" class="form-control" placeholder="مثال: علی محمدی" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ایمیل</label>
                        <input type="email" class="form-control" placeholder="example@mail.com" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" placeholder="حداقل ۸ کاراکتر" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">تکرار رمز عبور</label>
                        <input type="password" class="form-control" placeholder="رمز را دوباره وارد کنید" />
                    </div>

                    <button type="submit" class="btn-signup w-100">ثبت‌نام</button>
                </form>
            </div>

        </div>

    </div>

</body>
</html>