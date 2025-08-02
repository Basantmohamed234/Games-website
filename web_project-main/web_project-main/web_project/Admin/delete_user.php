<?php
session_start();
require 'conDB.php';

if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../main_project/login.php");
    exit();
}

if (isset($_GET['id'])) {
    $user_id = intval($_GET['id']);

    // منع الأدمن من حذف نفسه
    if ($user_id == $_SESSION['user_id']) {
        echo "<script>alert('لا يمكنك حذف نفسك!'); window.location.href='manage_users.php';</script>";
        exit();
    }

    $stmt = $con->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$user_id]);

    if ($stmt->rowCount() > 0) {
        header("Location: manage_users.php");
        exit();
    } else {
        echo "<script>alert('فشل الحذف أو المستخدم غير موجود.'); window.location.href='manage_users.php';</script>";
    }
} else {
    header("Location: manage_users.php");
    exit();
}
?>
