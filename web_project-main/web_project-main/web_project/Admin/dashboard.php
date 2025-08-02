<?php
session_start();
require 'conDB.php';

if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
  header("Location: ../main_project/login.php"); 
  exit();
}

$stmt = $con->query("SELECT COUNT(*) FROM games");
$games_count = $stmt->fetchColumn();

$stmt = $con->query("SELECT COUNT(*) FROM users");
$users_count = $stmt->fetchColumn();

$stmt = $con->query("SELECT COUNT(*) FROM messages");
$messages_count  = $stmt->fetchColumn();

$stmt = $con->query("SELECT id, title, category FROM games LIMIT 1");
$game = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $con->query("SELECT id, username, email FROM users LIMIT 1");
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $con->query("SELECT * FROM messages ORDER BY id DESC LIMIT 1");
$message = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo">لوحة التحكم</div>
            <nav>
                <ul>
                    <li><a href="manage_games.php">إدارة الألعاب</a></li>
                    <li><a href="manage_users.php">ادارة المستخدمين</a></li>
                    <li><a href="manage_messages.php">ادارة الرسائل</a></li>
                    <li><a href="../main_project/logout.php">تسجيل الخروج</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <div class="user-info">
                    <button onclick="window.location.href='../main_project/logout.php';" class="logout-button"> 
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                    <button onclick="window.location.href='../main_project/index.php';" class="home-icon"> 
                        <i class="fas fa-home"></i>
                    </button>
                </div>
            </header>

            <section class="statistics">
                <div class="stat-box">
                    <h3>عدد الألعاب</h3>
                    <p><?php echo $games_count; ?></p>
                </div>
                <div class="stat-box">
                    <h3>عدد اللاعبين</h3>
                    <p><?php echo $users_count; ?></p>
                </div>
                <div class="stat-box">
                    <h3>عدد الرسائل</h3>
                    <p><?php echo $messages_count; ?></p>
                </div>
            </section>

            <section class="management">
                <h2>إدارة الألعاب</h2>
                <button onclick="window.location.href='add_game.php';" class="add-game-btn">إضافة لعبة جديدة</button>
                <table>
                    <thead>
                        <tr>
                            <th>اسم اللعبة</th>
                            <th>الفئة</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($game): ?>
                        <tr>
                            <td><?= htmlspecialchars($game['title']) ?></td>
                            <td><?= htmlspecialchars($game['category']) ?></td>
                            <td><button onclick="window.location.href='edit_game.php';">تعديل</button><button onclick="window.location.href='delete_game.php';">حذف</button></td>
                        </tr>
                        <?php else: ?>
                        <tr>
                            <td colspan="3">لا توجد ألعاب حالياً</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <a href="manage_games.php" class="view-all-btn">عرض كل الألعاب</a>
            </section>

            <section class="management">
                <h2>إدارة المستخدمين</h2>
                <table>
                    <thead>
                        <tr>
                            <th>اسم المستخدم</th>
                            <th>الايميل</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['username']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><button onclick="window.location.href='delete_user.php';">حذف</button></td>
                        </tr>
                        <?php else: ?>
                        <tr>
                            <td colspan="3">لا يوجد مستخدمين حالياً</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <a href="manage_users.php" class="view-all-btn">عرض كل المستخدمين</a>
            </section>

            <section class="management">
                <h2>إدارة الرسائل</h2>
                <table>
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>الرسالة</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($message): ?>
                        <tr>
                            <td><?= htmlspecialchars($message['name']) ?></td>
                            <td><?= htmlspecialchars($message['email']) ?></td>
                            <td><?= nl2br(htmlspecialchars($message['message'])) ?></td>
                            <td><button onclick="window.location.href='delete_message.php';">حذف</button></td>
                        </tr>
                        <?php else: ?>
                        <tr>
                            <td colspan="4">لا توجد رسائل حالياً</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <a href="manage_messages.php" class="view-all-btn">عرض كل الرسائل</a>
            </section>
        </main>
    </div>
</body>
</html>
