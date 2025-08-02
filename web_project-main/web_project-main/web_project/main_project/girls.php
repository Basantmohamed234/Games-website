<?php
session_start();

if (!isset($_SESSION['user_id']) || (!empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)) {
    header("Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ألعاب بنات</title>
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
            <a href="user_account.php" class="account-icon" title="حسابي">
                <i class="fas fa-user-circle" style="font-size: 20px;"></i>
            </a>
            <a href="logout.php" class="logout-button">
                <i class="fa-solid fa-right-from-bracket"></i> 
            </a>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="ابحث في الألعاب">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="main-header">
            <h1>ألعاب بنات</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="cars.php">ألعاب سيارات</a></li>
                <li><a href="sports.php">ألعاب رياضية</a></li>
                <li><a href="fighting.php">ألعاب قتال</a></li>
                <li><a href="war.php">ألعاب حربية</a></li>
                <li><a href="adventure.php">ألعاب مغامرات</a></li>
                <li><a href="girls.php" class="active">ألعاب بنات</a></li>
                <li><a href="skill.php">ألعاب مهارة</a></li>
                <li><a href="puzzle.php">ألعاب بازل</a></li>
                <li><a href="kids.php">ألعاب أطفال</a></li>
                <li><a href="funny.php">ألعاب مضحكة</a></li>
                <li><a href="variety.php">ألعاب منوعة</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="games-section">
            <h2>ألعاب بنات</h2>
            <div class="games-grid">
                <a href="game.php?id=dream-chefs" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/dream-chefs.jpg" class="game-image">
                    <div class="game-title">شيفه الاحلام</div>
                  </a>
                  
                  <a href="game.php?id=kakato-otoshi" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/kakato-otoshi.jpg" class="game-image">
                    <div class="game-title">الكعب العالي</div>
                  </a>
                  
                  <a href="game.php?id=merge-cakes" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/merge-cakes.jpg" class="game-image">
                    <div class="game-title">دمج الكيك</div>
                  </a>
                  
                  <a href="game.php?id=funny-hair-salon" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/funny-hair-salon.jpg" class="game-image">
                    <div class="game-title">صالون حاقه</div>
                  </a>
                  
                  <a href="game.php?id=wedding-shoppe" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/wedding-shoppe.jpg" class="game-image">
                    <div class="game-title">محل العرائس</div>
                  </a>
                  
                  <a href="game.php?id=baby-frozen-fun-day" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/baby-frozen-fun-day.jpg" class="game-image">
                    <div class="game-title">يوم المرح</div>
                  </a>
                <!-- Additional Game Items... -->
            </div>
        </section>

        <section class="more-games">
            <!-- Additional Section for More Games -->
        </section>
    </main>
    <div class="pagination">
        <button onclick="goToPage(currentPage + 1)">الصفحة التالية</button>
        <button onclick="goToPage(8)">8</button>
        <button onclick="goToPage(7)">7</button>
        <button onclick="goToPage(6)">6</button>
        <button onclick="goToPage(5)">5</button>
        <button onclick="goToPage(4)">4</button>
        <button onclick="goToPage(3)">3</button>
        <button onclick="goToPage(2)">2</button>
        <button onclick="goToPage(1)">1</button>
      </div>
    <footer>
        <p>© 2025 جميع الحقوق محفوظة - موقع ألعاب ممتعة</p>
    </footer>
    <script src="script.js" defer></script>
</body>
</html>
