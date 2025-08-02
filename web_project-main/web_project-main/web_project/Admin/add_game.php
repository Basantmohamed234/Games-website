<?php
require_once 'conDB.php';
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../main_project/login.php"); 
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';

    if ($title && $description) {
        $stmt = $con->prepare("INSERT INTO games (title, description) VALUES (?, ?)");
        $stmt->execute([$title, $description]);
        header("Location: manage_games.php");
        exit();
    } else {
        $error = "يرجى ملء كل الحقول.";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الألعاب</title>
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
                <li><a href="manage_games.php" class="active">إدارة الألعاب</a></li>
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
                    <button onclick="window.location.href='dashboard.php';" class="home-icon"> 
                        <i class="fas fa-home"></i>
                    </button>
                </div>
            </header>

            <section class="form-section">
                <h2><i class="fas fa-plus-circle"></i> إضافة لعبة جديدة</h2>
                <form action="add_game.php" method="POST" enctype="multipart/form-data" class="gen-form">
                <label for="title">عنوان اللعبة:</label>
                <input type="text" id="title" name="title" placeholder="أدخل عنوان اللعبة" required>

                <label for="category">فئة اللعبة:</label>
                <input type="text" id="category" name="category" placeholder="أدخل نوع اللعبة (مثلاً: سيارات، مغامرات...)" required>

                <label for="description">وصف اللعبة:</label>
                <textarea id="description" name="description" placeholder="اكتب وصفاً مختصراً للعبة" required></textarea>

                <label for="image">صورة اللعبة:</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <label for="file">ملف اللعبة:</label>
                <input type="file" id="file" name="file" required>

                <button type="submit"><i class="fas fa-upload"></i> إضافة اللعبة</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
