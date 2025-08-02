<?php
session_start();

if (!isset($_SESSION['user_id']) || (!empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)) {
    header("Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تعديل بيانات المستخدم</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="user-actions">
                <a href="index.php" class="home-icon" title="الصفحة الرئيسية">
                    <i class="fas fa-home"></i>
                </a>
                <a href="logout.php" class="logout-button">تسجيل الخروج</a>
            </div>
        </div>

        <div class="main-header">
            <h1>تعديل بيانات المستخدم</h1>
        </div>
    </header>

    <main>
        <section class="form-section">
            <h2>نموذج تعديل البيانات</h2>

            <form action="update_userinfo.php" method="POST" class="gen-form">
                <label for="username">اسم المستخدم:</label>
                <input type="text" id="username" name="username" required placeholder="أدخل اسم المستخدم">

                <label for="email">البريد الإلكتروني:</label>
                <input type="email" id="email" name="email" required placeholder="أدخل البريد الإلكتروني">

                <label for="password">كلمة المرور:</label>
                <input type="password" id="password" name="password" placeholder="أدخل كلمة مرور جديدة (اختياري)">

                <button type="submit">
                    <i class="fas fa-save"></i> تحديث البيانات
                </button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2025 جميع الحقوق محفوظة - موقع ألعاب ممتعة</p>
    </footer>
</body>
</html>
