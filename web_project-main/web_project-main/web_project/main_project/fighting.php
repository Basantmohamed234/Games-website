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
    <title>ألعاب قتال</title>
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
            <h1>ألعاب قتال</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="cars.php">ألعاب سيارات</a></li>
                <li><a href="sports.php">ألعاب رياضية</a></li>
                <li><a href="fighting.php" class="active">ألعاب قتال</a></li>
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

                <a href="game.php?id=grand-shift-auto" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/grand-shift-auto.jpg" class="game-image">
                    <div class="game-title">حرامي السيارات</div>
                </a>
                
                <a href="game.php?id=miami-crime-simulator-3d" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/miami-crime-simulator-3d.jpg" class="game-image">
                    <div class="game-title">رجل المافيا</div>
                </a>
                
                <a href="game.php?id=krunker-io" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/krunker-io.jpg" class="game-image">
                    <div class="game-title">كرانكر</div>
                </a>
                
                <a href="game.php?id=sniper-mission-3d" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/sniper-mission-3d.jpg" class="game-image">
                    <div class="game-title">مهمه قناص</div>
                </a>
                
                <a href="game.php?id=valley-of-the-wolves" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/valley-of-the-wolves.jpg" class="game-image">
                    <div class="game-title">وادي الذئاب</div>
                </a>
                
                <a href="game.php?id=army-sniper" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/army-sniper.jpg" class="game-image">
                    <div class="game-title">قناص الجنود</div>
                </a>
                
                <a href="game.php?id=stupid-zombies" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/stupid-zombies.jpg" class="game-image">
                    <div class="game-title">الزومبي الغبي</div>
                </a>
                
                <a href="game.php?id=smurphin-for-brooklyn" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/smurphin-for-brooklyn.jpg" class="game-image">
                    <div class="game-title">السنفور الغضبان</div>
                </a>
                
                <a href="game.php?id=red-monster" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/red-monster.jpg" class="game-image">
                    <div class="game-title">الوحش الاحمر</div>
                </a>
                
                <a href="game.php?id=zombocalypse" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/zombocalypse.jpg" class="game-image">
                    <div class="game-title">قتال الزومبي</div>
                </a>
                
                <a href="game.php?id=mass-mayhem-4" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/mass-mayhem-4.jpg" class="game-image">
                    <div class="game-title">الرجل الارهابي</div>
                </a>
                
                <a href="game.php?id=3-foot-ninja" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/3-foot-ninja.jpg" class="game-image">
                    <div class="game-title">فتي النينجا</div>
                </a>
                
                <a href="game.php?id=fantasy-sniper" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/fantasy-sniper.jpg" class="game-image">
                    <div class="game-title">قناص الخيال</div>
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
