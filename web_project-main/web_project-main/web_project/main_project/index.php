<?php
session_start();

if (!isset($_SESSION['user_id']) || (!empty($_SESSION['is_admin']) && $_SESSION['is_admin'] != 1)) {
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
    <title>ألعاب فلاش</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="user-actions">
            <a href="user_account.php" class="account-icon" title="حسابي">
                    <i class="fas fa-user-circle" style="font-size: 20px;"></i>
            </a>
            <a href="logout.php" class="logout-button">
                    <i class="fa-solid fa-right-from-bracket"></i> 
                </a>
            <a href="contact.php"><i class="fas fa-envelope"></i> اتصل بنا</a>
            </div>
              
              <div class="search-bar">
                <input type="text" placeholder="ابحث في الألعاب">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="main-header">
            <h1>مرحباً بك يا <?= htmlspecialchars($user['username']) ?> في موقع الألعاب!</h1>
            <div class="logo">
                <!-- Logo Placeholder -->
            </div>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="cars.php">ألعاب سيارات</a></li>
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
            <h2>يمكنك الآن تصفح الألعاب بكل حرية!</h2>
            <div class="games-grid">
                
                <a href="game.php?id=2d-knockout" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/2d-knockout.jpg" class="game-image">
                    <div class="game-title">الملاكمه</div>
                </a>
                
                <a href="game.php?id=farm-frenzy-3" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/farm-frenzy-3.jpg" class="game-image">
                    <div class="game-title">Farm Frenzy 3</div>
                </a>
                
                <a href="game.php?id=bowling-4" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/bowling-4.jpg" class="game-image">
                    <div class="game-title">كره البولينج</div>
                </a>
                
                <a href="game.php?id=alien-attack" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/alien-attack.jpg" class="game-image">
                    <div class="game-title">قناص افغانستان</div>
                </a>
                
                <a href="game.php?id=thirty-second-monkey-hunt" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/thirty-second-monkey-hunt.jpg" class="game-image">
                    <div class="game-title">صيد القرود</div>
                </a>
                
                <a href="game.php?id=shooting-hoops" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/shooting-hoops.jpg" class="game-image">
                    <div class="game-title">Shooting Hoops</div>
                </a>
                
                <a href="game.php?id=soccer-pong" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/soccer-pong.jpg" class="game-image">
                    <div class="game-title">Football</div>
                </a>
                
                <a href="game.php?id=r-shot" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/r-shot.jpg" class="game-image">
                    <div class="game-title">Hunter</div>
                </a>
                
                <a href="game.php?id=ant-ken-do" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/ant-ken-do.jpg" class="game-image">
                    <div class="game-title">الضرب بالعصا</div>
                </a>
                
                <a href="game.php?id=g-ball" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/g-ball.jpg" class="game-image">
                    <div class="game-title">الطاوله المتحركه</div>
                </a>
                
                <a href="game.php?id=collinks" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/collinks.jpg" class="game-image">
                    <div class="game-title">تساقط المربعات</div>
                </a>
                <a href="game.php?id=get-flippy" class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/get-flippy.jpg" class="game-image">
                      <div class="game-title">اصطياد الدولفين</div> 
                </a>
                  
                <a href="game.php?id=the-ant-arena"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/the-ant-arena.jpg" class="game-image">
                      <div class="game-title">النمله</div>
                </a>
                  
                <a href="game.php?id=grand-shift-auto"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/grand-shift-auto.jpg" class="game-image">
                      <div class="game-title">حرامي السيارات</div>
                 </a>
                  
                <a href="game.php?id=miami-crime-simulator-3d"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/miami-crime-simulator-3d.jpg" class="game-image">
                      <div class="game-title">رجل المافيا</div>
                 </a>
                  
                 <a href="game.php?id=krunker-io"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/krunker-io.jpg" class="game-image">
                      <div class="game-title">كرانكر</div>
                 </a>
                  
                 <a href="game.php?id=sniper-mission-3d"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/sniper-mission-3d.jpg" class="game-image">
                      <div class="game-title">مهمه قناص</div>
                </a>
                  
                <a href="game.php?id=valley-of-the-wolves"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/valley-of-the-wolves.jpg" class="game-image">
                      <div class="game-title">وادي الذئاب</div>
                 </a>
                  
                <a href="game.php?id=army-sniper"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/army-sniper.jpg" class="game-image">
                      <div class="game-title">قناص الجنود</div>
                </a>
                  
                 <a href="game.php?id=stupid-zombies"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/stupid-zombies.jpg" class="game-image">
                      <div class="game-title">الزومبي الغبي</div>
                 </a>
                  
                <a href="game.php?id=smurphin-for-brooklyn"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/smurphin-for-brooklyn.jpg" class="game-image">
                      <div class="game-title">السنفور الغضبان</div>
                </a>
                
                <a href="game.php?id=red-monster"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/red-monster.jpg" class="game-image">
                      <div class="game-title">الوحش الاحمر</div>
                </a>
                  
                <a href="game.php?id=zombocalypse"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/zombocalypse.jpg" class="game-image">
                      <div class="game-title">قتال الزومبي</div>
                </a>
                  
                <a href="game.php?id=mass-mayhem-4"class="game-item">
                      <img src="https://cdn.ttt4.com/maher/images/thumbnail/mass-mayhem-4.jpg" class="game-image">
                      <div class="game-title">الرجل الارهابي</div>
                </a>

                <a href="game.php?id=zombs-royale" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/zombs-royale.jpg" class="game-image">
                    <div class="game-title">زومبي رويال</div>
                </a>
                
                <a href="game.php?id=zombie-hunters" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/zombie-hunters.jpg" class="game-image">
                    <div class="game-title">صيادو الزومبي</div>
                </a>
                
                <a href="game.php?id=battle-coast" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/battle-coast.jpg" class="game-image">
                    <div class="game-title">معركه الساحل</div>
                </a>
                
                <a href="game.php?id=jack-frost" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/jack-frost.jpg" class="game-image">
                    <div class="game-title">jack-frost</div>
                </a>
                
                <a href="game.php?id=forest-temple" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/forest-temple.jpg" class="game-image">
                    <div class="game-title">forest-temple</div>
                </a>
                
                <a href="game.php?id=bob-the-robber" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/bob-the-robber.jpg" class="game-image">
                    <div class="game-title">بوب الحرامي</div>
                </a>
                
                <a href="game.php?id=frozen-double-trouble" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/frozen-double-trouble.jpg" class="game-image">
                    <div class="game-title">انا و اليس</div>
                </a>
                
                <a href="game.php?id=super-flash-mario-bros" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/super-flash-mario-bros.jpg" class="game-image">
                    <div class="game-title">سوبر ماريو</div>
                </a>
                
                <a href="game.php?id=shark-io" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/shark-io.jpg" class="game-image">
                    <div class="game-title">سمكه القرش</div>
                </a>
                
                <a href="game.php?id=bubble-tower" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/bubble-tower.jpg" class="game-image">
                    <div class="game-title">برج الفقاعات</div>
                </a>
                
                <a href="game.php?id=pop-pop-candies" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/pop-pop-candies.jpg" class="game-image">
                    <div class="game-title">حلوي البوب</div>
                </a>
                
                <a href="game.php?id=tom-and-jerry---cat-crossing" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/tom-and-jerry---cat-crossing.jpg" class="game-image">
                    <div class="game-title">توم يعبر النهر</div>
                </a>
                
                <a href="game.php?id=little-red-cap-differences" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/little-red-cap-differences.jpg" class="game-image">
                    <div class="game-title">ليلي والذئب</div>
                </a>
                
                <a href="game.php?id=duck-dodgers" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/duck-dodgers.jpg" class="game-image">
                    <div class="game-title">البط المقاتل</div>
                </a>
                
                <a href="game.php?id=toy-shop" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/toy-shop.jpg" class="game-image">
                    <div class="game-title">محل العاب</div>
                </a>
                
                <a href="game.php?id=bunch-of-grapes" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/bunch-of-grapes.jpg" class="game-image">
                    <div class="game-title">عنقود العنب</div>
                </a>
                
                <a href="game.php?id=monkey-lander" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/monkey-lander.jpg" class="game-image">
                    <div class="game-title">هبوط القرد</div>
                </a>
                
                <a href="game.php?id=slap-king" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/slap-king.jpg" class="game-image">
                    <div class="game-title">ضرب الكف</div>
                </a>
                
                <a href="game.php?id=the-first-date" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/the-first-date.jpg" class="game-image">
                    <div class="game-title">الموعد الاول</div>
                </a>
                
                <a href="game.php?id=brucele-movie" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/brucele-movie.jpg" class="game-image">
                    <div class="game-title">البروسلي</div>
                </a>
                
                <a href="game.php?id=jail-break-rush" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/jail-break-rush.jpg" class="game-image">
                    <div class="game-title">الهروب من السجن</div>
                </a>
                
                <a href="game.php?id=defend-your-castle" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/defend-your-castle.jpg" class="game-image">
                    <div class="game-title">نعم و لا</div>
                </a>
                
                <a href="game.php?id=save-them-goldfish" class="game-item">
                    <img src="https://cdn.ttt4.com/maher/images/thumbnail/save-them-goldfish.jpg" class="game-image">
                    <div class="game-title">انقاذ السمك الذهبي</div>
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
