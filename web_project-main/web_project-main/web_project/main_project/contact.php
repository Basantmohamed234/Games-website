<?php
require 'conDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // التأكد من استقبال البيانات
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($email) && !empty($message)) {
        try {
            $stmt = $con->prepare("INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);
            $stmt->execute();

            echo "تم إرسال الرسالة بنجاح!";
        } catch (PDOException $e) {
            echo "حدث خطأ أثناء الإرسال: " . $e->getMessage();
        }
    } else {
        echo "من فضلك، املأ جميع الحقول.";
    }
} else {
    echo "طريقة الإرسال غير صحيحة.";
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا</title>
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
                <a href="signin.php"><i class="fas fa-sign-in-alt"></i> دخول</a> | 
                <a href="signup.php"><i class="fas fa-user-plus"></i> تسجيل</a>
            </div>
           
        </div>
        <div class="main-header">
            <h1>اتصل بنا</h1>
        </div>
      
    </header>

    <main>
        <section class="form-section">
            <h2>تواصل معنا</h2>
            <form action="#" method="POST" class="gen-form">
                <label for="name">اسمك:</label>
                <input type="text" id="name" name="name" placeholder="أدخل اسمك" required>

                <label for="email">البريد الإلكتروني:</label>
                <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required>

                <label for="message">رسالتك:</label>
                <textarea id="message" name="message" placeholder="أدخل رسالتك هنا" rows="5" required></textarea>

                <button type="submit"><i class="fas fa-paper-plane"></i> إرسال</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2025 جميع الحقوق محفوظة - موقع ألعاب ممتعة</p>
    </footer>
    <script src="script.js" defer></script>
</body>
</html>
