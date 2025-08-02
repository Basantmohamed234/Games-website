<?php
require_once "condb.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm-password'];

    if ($username && $email && $password && $confirm) {
        if ($password !== $confirm) {
            echo "<script>alert('كلمتا المرور غير متطابقتين'); window.history.back();</script>";
            exit();
        }

        // تحقق من أن البريد الإلكتروني غير مستخدم
        $stmt = $con->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            echo "<script>alert('البريد الإلكتروني مستخدم من قبل'); window.history.back();</script>";
            exit();
        }

        // تشفير كلمة المرور
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // إنشاء المستخدم
        $insert = $con->prepare("INSERT INTO users (username, email, password, created_at) VALUES (?, ?, ?, NOW())");
        $insert->execute([$username, $email, $hashedPassword]);

        // الحصول على ID المستخدم بعد الإنشاء
        $userId = $con->lastInsertId();

        // تخزين معلومات المستخدم في الجلسة
        $_SESSION['user_id'] = $userId;
        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('من فضلك أدخل كل البيانات'); window.history.back();</script>";
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب جديد</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="user-actions">
                <a href="index.php" class="home-icon" title="الصفحة الرئيسية">
                    <i class="fas fa-home"></i>
                </a>
                <a href="contact.php"><i class="fas fa-envelope"></i> اتصل بنا</a>
            </div>
           
        </div>
        <div class="main-header">
            <h1>إنشاء حساب جديد</h1>
        </div>
       
    </header>

    <main>
        <section class="form-section">
            <h2>تسجيل حساب جديد</h2>
            <form action="signup.php" method="POST" class="gen-form">
    <label for="username">اسم المستخدم:</label>
    <input type="text" id="username" name="username" placeholder="أدخل اسم المستخدم" required>

    <label for="email">البريد الإلكتروني:</label>
    <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required>

    <label for="password">كلمة المرور:</label>
    <div style="position: relative;">
        <input type="password" id="password" name="password" placeholder="أدخل كلمة المرور" required style="padding-left: 40px;">
        <i class="fas fa-eye" id="togglePassword" style="position: absolute; top: 40%; left: 10px; transform: translateY(-60%); cursor: pointer; color: #888;"></i>
    </div>

    <label for="confirm-password">تأكيد كلمة المرور:</label>
    <div style="position: relative;">
        <input type="password" id="confirm-password" name="confirm-password" placeholder="أعد إدخال كلمة المرور" required style="padding-left: 40px;">
        <i class="fas fa-eye" id="toggleConfirmPassword" style="position: absolute; top: 40%; left: 10px; transform: translateY(-60%); cursor: pointer; color: #888;"></i>
    </div>

    <div class="checkbox-container" style="display: flex; align-items: center; gap: 8px;">
    <input type="checkbox" id="terms" name="terms" required>
    <label for="terms" style="display: inline; font-size: 14px;">
        أوافق على 
        <a href="javascript:void(0);" onclick="document.getElementById('terms-section').scrollIntoView({behavior: 'smooth'})" style="color: #ff5722; text-decoration: underline; display: inline;">
            الشروط والأحكام
        </a>
    </label>                    
    </div>                                               

    <button type="submit"><i class="fas fa-user-plus"></i> إنشاء الحساب</button>

    <p style="text-align: center; margin-top: 15px;">
        لديك حساب بالفعل؟ <a href="login.php" style="color: #ff5722;">سجل الدخول من هنا</a>
    </p>
</form>

        </section>

        <section id="terms-section" class="form-section" style="margin-top: 40px;">
            <h2>الشروط والأحكام</h2>
            <ul style="padding-right: 20px; list-style: disc;">
                <li>عدم استخدام الموقع في أنشطة غير قانونية أو مخالفة للأداب.</li>
                <li>عدم نشر محتوى ينتهك حقوق الآخرين.</li>
                <li>الحفاظ على سرية معلومات الحساب الشخصي.</li>
                <li>يحق لإدارة الموقع حذف أي حساب يخالف الشروط دون إنذار.</li>
                <li>نحتفظ بحق تعديل الشروط في أي وقت.</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>© 2025 جميع الحقوق محفوظة - موقع ألعاب ممتعة</p>
    </footer>

    <script>
        const password = document.getElementById('password');
        const confirm = document.getElementById('confirm-password');
    
        confirm.addEventListener('input', () => {
            if (password.value !== confirm.value) {
                confirm.setCustomValidity('كلمتا المرور غير متطابقتين');
            } else {
                confirm.setCustomValidity('');
            }
        });
    
        const togglePassword = document.getElementById('togglePassword');
        togglePassword.addEventListener('click', () => {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            togglePassword.classList.toggle('fa-eye-slash');
        });
    
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        toggleConfirmPassword.addEventListener('click', () => {
            const type = confirm.getAttribute('type') === 'password' ? 'text' : 'password';
            confirm.setAttribute('type', type);
            toggleConfirmPassword.classList.toggle('fa-eye-slash');
        });
    </script>

    <script src="script.js" defer></script>
</body>
</html>
