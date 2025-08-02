<?php
session_start();
require 'conDB.php';

if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../main_project/login.php");
    exit();
}

// لو جالي id في الرابط
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // جيب بيانات اللعبة القديمة
    $stmt = $con->prepare("SELECT * FROM games WHERE id = ?");
    $stmt->execute([$id]);
    $game = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$game) {
        echo "اللعبة غير موجودة!";
        exit();
    }
} else {
    // لو مفيش id
    header("Location: manage_games.php");
    exit();
}

// لو الفورم اتبعت
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $link = $_POST['link'] ?? '';

    if ($title && $description && $link) {
        $stmt = $con->prepare("UPDATE games SET title = ?, description = ?, link = ? WHERE id = ?");
        $stmt->execute([$title, $description, $link, $id]);
        
        header("Location: manage_games.php");
        exit();
    } else {
        $error = "يجب ملء جميع الحقول.";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل اللعبة</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo">لوحة التحكم</div>
            <nav>
                <ul>
                    <li><a href="manage_games.php" class="active">إدارة الألعاب</a></li>
                    <li><a href="manage_users.php">إدارة المستخدمين</a></li>
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

            <section class="form-section">
                <h2><i class="fas fa-edit"></i> تعديل اللعبة</h2>

                <?php if (isset($error)) { echo "<p class='error-message'>$error</p>"; } ?>

                <form action="edit_game.php?id=<?= $game['id'] ?>" method="POST" class="gen-form">
                    <label for="title">اسم اللعبة:</label>
                    <input type="text" id="title" name="title" value="<?= htmlspecialchars($game['title']) ?>" required>

                    <label for="title"> الفئة:</label>
                    <input type="text" id="title" name="title" value="<?= htmlspecialchars($game['category']) ?>" required>

                    <label for="description">الوصف:</label>
                    <textarea id="description" name="description" rows="5" required><?= htmlspecialchars($game['description']) ?></textarea>

                    <label for="link">رابط اللعبة:</label>
                    <input type="url" id="link" name="link" value="" required>

                    <button type="submit">
                        <i class="fas fa-save"></i> تحديث اللعبة
                    </button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
