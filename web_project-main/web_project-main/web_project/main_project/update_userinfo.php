<?php
session_start();
require_once "conDB.php";

// تأكد إن المستخدم مسجل دخوله
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $new_username = trim($_POST['username']);
    $new_email = trim($_POST['email']);
    $new_password = $_POST['password'];

    // تأكد من عدم وجود حقول فاضية
    if ($new_username && $new_email) {
        if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('بريد إلكتروني غير صالح'); window.history.back();</script>";
            exit();
        }

        // تحديث بناءً على وجود كلمة مرور جديدة أو لا
        if (!empty($new_password)) {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $stmt = $con->prepare("UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?");
            $stmt->execute([$new_username, $new_email, $hashed_password, $user_id]);
        } else {
            $stmt = $con->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
            $stmt->execute([$new_username, $new_email, $user_id]);
        }

        // تحديث بيانات الجلسة بعد التعديل
        $_SESSION['username'] = $new_username;

        echo "<script>alert('تم تحديث الحساب بنجاح'); window.location.href = 'user_account.php';</script>";
        exit();
    } else {
        echo "<script>alert('من فضلك أدخل جميع البيانات المطلوبة'); window.history.back();</script>";
    }
}
?>
