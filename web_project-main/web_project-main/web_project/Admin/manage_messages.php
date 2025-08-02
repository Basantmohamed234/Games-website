<?php
session_start();
require 'conDB.php';

if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../main_project/login.php"); 
    exit();
}

$stmt = $con->query("SELECT * FROM messages ORDER BY id DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الرسائل</title>
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
                    <li><a href="manage_users.php">إدارة المستخدمين</a></li>
                    <li><a href="manage_messages.php" class="active">إدارة الرسائل</a></li>
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
                <h2>إدارة الرسائل</h2>
                <table>
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>الرسالة</th>
                            <th>تم الإرسال في</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($messages as $message): ?>
                        <tr>
                            <td><?= htmlspecialchars($message['name']) ?></td>
                            <td><?= htmlspecialchars($message['email']) ?></td>
                            <td><?= nl2br(htmlspecialchars($message['message'])) ?></td>
                            <td><?= htmlspecialchars($message['created_at']) ?></td>
                            <td>
                                <button onclick="confirmDelete(<?= $message['id'] ?>)">حذف</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <script>
    function confirmDelete(messageId) {
        if (confirm('هل أنت متأكد أنك تريد حذف هذه الرسالة؟')) {
            window.location.href = 'delete_message.php?id=' + messageId;
        }
    }
    </script>
</body>
</html>
