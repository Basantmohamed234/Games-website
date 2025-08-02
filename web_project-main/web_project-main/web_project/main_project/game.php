<?php
session_start();

if (!isset($_SESSION['user_id']) || (!empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)) {
  header("Location: login.php"); 
  exit();
}
?>

<!-- game.html -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>تفاصيل اللعبة</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="top-bar">
        <div class="user-actions">
        <a href="index.php" class="home-icon" title="الصفحة الرئيسية">
            <i class="fas fa-home"></i>
        </a>
        <a href="user_account.php" class="account-icon" title="حسابي">
            <i class="fas fa-user-circle" style="font-size: 20px;"></i>
        </a>
        <a href="logout.php" class="logout-button">
            <i class="fa-solid fa-right-from-bracket"></i> 
        </a>
        </div>
    </div>
    <div class="main-header">
        <h1></h1>
    </div>
   
</header>
  <main class="game-details">
    <h1 id="game-title"></h1>
    <img id="game-image" alt="صورة اللعبة">
    <button id="play-button">Start Play</button>
    <section>
      <h2>وصف اللعبة:</h2>
      <p id="game-description"></p>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>