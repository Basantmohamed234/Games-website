<?php
session_start();
require 'conDB.php';

if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../main_project/login.php"); 
    exit();
}

$stmt = $con->query("SELECT id, username, email FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المستخدمين</title>
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
                    <li><a href="manage_users.php" class="active">إدارة المستخدمين</a></li>
                    <li><a href="manage_messages.php">إدارة الرسائل</a></li>
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
                    <button onclick="window.location.href='dashboard.php';" class="home-icon"> 
                        <i class="fas fa-home"></i>
                    </button>
                </div>
            </header>

            <section class="management">
                <h2>إدارة المستخدمين</h2>
                <table>
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الإيميل</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['username']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td>
                                <button onclick="confirmDelete(<?= $user['id'] ?>)">حذف</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <script>
    function confirmDelete(userId) {
        if (confirm('هل أنت متأكد أنك تريد حذف هذا المستخدم؟')) {
            window.location.href = 'delete_user.php?id=' + userId;
        }
    }
    </script>
</body>
</html>
