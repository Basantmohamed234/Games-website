<?php
session_start();
require_once 'conDB.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $con->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([$user_id]);

if ($stmt->rowCount() > 0) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
} else {
    echo "حدث خطأ أثناء حذف الحساب.";
}
?>
