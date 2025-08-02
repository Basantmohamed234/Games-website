<?php
session_start();
require 'conDB.php';

if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../main_project/login.php");
    exit();
}

if (isset($_GET['id'])) {
    $message_id = intval($_GET['id']);

    $stmt = $con->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->execute([$message_id]);

    if ($stmt->rowCount() > 0) {
        header("Location: manage_messages.php");
        exit();
    } else {
        echo "<script>alert('فشل الحذف أو الرسالة غير موجودة.'); window.location.href='manage_messages.php';</script>";
    }
} else {
    header("Location: manage_messages.php");
    exit();
}
?>
