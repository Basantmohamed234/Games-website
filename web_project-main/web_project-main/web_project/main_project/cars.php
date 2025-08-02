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
    <title>ألعاب سيارات</title>
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
            <h1>ألعاب سيارات</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="cars.php" class="active">ألعاب سيارات</a></li>
                <li><a href="sports.php">ألعاب رياضية</a></li>
                <li><a href="fighting.php">ألعاب قتال</a></li>
                <li><a href="war.php">ألعاب حربية</a></li>
                <li><a href="adventure.php">ألعاب مغامرات</a></li>
                <li><a href="girls.php">ألعاب بنات</a></li>
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
            <h2>ألعاب سيارات</h2>
            <div class="games-grid">
                <a href="game.php?id=moto-x3m-3" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/moto-x3m-3.jpg" class="game-image">
                    <div class="game-title">موتو اكس 3</div>
                </a>
                
                <a href="game.php?id=furious-racing-3d" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/furious-racing-3d.jpg" class="game-image">
                    <div class="game-title">angry race</div>
                </a>
                
                <a href="game.php?id=indian-truck-simulator-3d" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/indian-truck-simulator-3d.jpg" class="game-image">
                    <div class="game-title">الشاحنه الهنديه</div>
                </a>
                
                <a href="game.php?id=free-new-york-taxi-driver-3d-sim" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/free-new-york-taxi-driver-3d-sim.jpg" class="game-image">
                    <div class="game-title">سواق نيويورك</div>
                </a>
                
                <a href="game.php?id=car-parking" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/car-parking.jpg" class="game-image">
                    <div class="game-title">جراج سيارات</div>
                </a>
                
                <a href="game.php?id=indian-uphill-bus" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/indian-uphill-bus.jpg" class="game-image">
                    <div class="game-title">باص الجبال</div>
                </a>
                
                <a href="game.php?id=madalin-cars-multiplayer" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/madalin-cars-multiplayer.jpg" class="game-image">
                    <div class="game-title">سيارات مادلين</div>
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
