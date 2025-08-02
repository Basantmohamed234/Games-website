<?php
session_start();

if (!isset($_SESSION['user_id']) || (!empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)) {
    header("Location: login.php"); 
    exit();
}

require_once "conDB.php";

$user_id = $_SESSION['user_id'];
$stmt = $con->prepare("SELECT username, email, created_at FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حسابى</title>
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
                <a href="logout.php" class="logout-button">
                    <i class="fa-solid fa-right-from-bracket"></i> 
                </a>
            </div>
        </div>
        <div class="main-header">
            <h1>حسابى</h1>
        </div>
    </header>

    <main>
        <section class="account-info-section">
            <h2>معلومات حسابك</h2>
            <div class="account-info">
                <p><strong>الاسم:</strong><?= htmlspecialchars($user['username']) ?></p>
                <p><strong>البريد الإلكتروني:</strong><?= htmlspecialchars($user['email']) ?></p>
                <p><strong>تاريخ التسجيل:</strong><?= htmlspecialchars($user['created_at']) ?></p>
            </div>
            <div class="buttons-container">
                <button class="edit-btn" onclick="window.location.href='edit_userinfo.php'">تعديل المعلومات</button>
                
                <button class="delete-btn" onclick="window.location.href='delete_account.php'">
                    <i class="fas fa-trash"></i> حذف الحساب
                </button>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2025 جميع الحقوق محفوظة - موقع ألعاب ممتعة</p>
    </footer>
    <script src="script.js" defer></script>
</body>
</html>
