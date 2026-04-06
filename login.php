<?php include "includes/navbar.php"; ?>
<?php
session_start();
include 'db.php'; // ملف الاتصال بقاعدة البيانات

$error = "";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // تحقق من الادمن
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
$stmt->bind_param("s", $username);
   
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1){
        $admin = $result->fetch_assoc();
        if($password === $admin['password']){
            $_SESSION['admin'] = $admin['username'];
            header("Location: admin.php"); 
            exit();
        } else {
            $error = "كلمة المرور غير صحيحة";
        }
    } else {
        $error = "اسم المستخدم غير موجود";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Learnova</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>

  <main class="container auth-page">
    <div class="auth-card">
      <h1 class="auth-title">Admin Login</h1>
      <p class="auth-subtitle">Access restricted to authorized administrators only.</p>

      <form class="auth-form" action="" method="post">
      <div class="field">
    <label for="username">Username</label>
    <input id="username" name="username" type="text" placeholder="admin" required>
</div>

        <div class="field">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="••••••••" required>
        </div>

        <button type="submit" name="login" class="btn auth-btn">
            Sign In
        </button>

        <?php if($error != ""): ?>
            <p style="color:red; margin-top:10px;"><?php echo $error; ?></p>
        <?php endif; ?>
      </form>
    </div>
  </main>

<?php include "includes/footer.php"; ?>