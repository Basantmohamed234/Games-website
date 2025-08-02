<?php
session_start();
require_once "conDB.php";  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login_input = trim($_POST['login_input']);
    $password = $_POST['password'];

    if (filter_var($login_input, FILTER_VALIDATE_EMAIL)) {
        $login_type = 'email';
    } else {
        $login_type = 'username';
    }

    if ($login_input && $password) {
        if ($login_type == 'email') {
            $stmt = $con->prepare("SELECT id, username, email, password FROM users WHERE email = ?");
        } else {
            $stmt = $con->prepare("SELECT id, username, email, password FROM users WHERE username = ?");
        }
        
        $stmt->execute([$login_input]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['is_admin'] = 0; 
                header("Location: index.php"); 
                exit();
            } else {
                echo "<script>alert('كلمة المرور غير صحيحة'); window.history.back();</script>";
                exit();
            }
        }

        $stmt = $con->prepare("SELECT id, username, password FROM admins WHERE username = ?");
        $stmt->execute([$login_input]);

        if ($stmt->rowCount() > 0) {
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $admin['password'])) {
                $_SESSION['user_id'] = $admin['id'];
                $_SESSION['username'] = $admin['username'];
                $_SESSION['is_admin'] = 1; 
                header("Location: ../Admin/dashboard.php");
                exit();
            } else {
                echo "<script>alert('كلمة المرور غير صحيحة'); window.history.back();</script>";
                exit();
            }
        }

        echo "<script>alert('لا يوجد حساب بهذا البريد أو اسم المستخدم'); window.history.back();</script>";
    } else {
        echo "<script>alert('من فضلك أدخل البريد أو اسم المستخدم وكلمة المرور'); window.history.back();</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
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
            <h1>تسجيل الدخول</h1>
        </div>
    </header>

    <main>
        <section class="form-section">
            <h2>تسجيل الدخول إلى حسابك</h2>
            <form action="login.php" method="POST" class="gen-form">
            <label for="login_input">البريد الإلكتروني أو اسم المستخدم:</label>
            <input type="text" id="login_input" name="login_input" placeholder="أدخل البريد الإلكتروني أو اسم المستخدم" required autocomplete="off">

                <label for="password">كلمة المرور:</label>
                <div style="position: relative;">
                    <input type="password" id="password" name="password" placeholder="أدخل كلمة المرور" required autocomplete="off" style="padding-left: 40px;">
                    <i class="fas fa-eye" id="togglePassword" style="position: absolute; top: 40%; left: 10px; transform: translateY(-60%); cursor: pointer; color: #999;"></i>
                </div>

                <button type="submit"><i class="fas fa-sign-in-alt"></i> تسجيل الدخول</button>
            
                <p style="text-align: center; margin-top: 15px;">
                    مستخدم جديد؟ <a href="signup.php" style="color: #ff5722;">أنشئ حساب الآن</a>
                </p>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2025 جميع الحقوق محفوظة - موقع ألعاب ممتعة</p>
    </footer> 

    <script>
        const toggle = document.getElementById('togglePassword');
        const password = document.getElementById('password');
      
        toggle.addEventListener('click', () => {
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          toggle.classList.toggle('fa-eye-slash');
        });
      </script> 
      
    <script src="script.js" defer></script>
</body>
</html>
