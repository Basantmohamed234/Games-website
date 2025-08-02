<?php
require_once 'conDB.php';
session_start();

if (!isset($_SESSION['user_id']) || empty($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../main_project/login.php"); 
    exit();
}

if (isset($_GET['id'])) {
    $game_id = intval($_GET['id']); 

    $query = "DELETE FROM games WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->execute([$game_id]);

    header("Location: manage_games.php");
    exit();
} else {
    header("Location: manage_games.php");
    exit();
}
?>
