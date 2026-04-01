<?php include "includes/navbar.php"; ?>

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

      <form class="auth-form" action="#" method="post">
        <div class="field">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="you@example.com" required>
        </div>

        <div class="field">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="••••••••" required>
        </div>

     
     <form action="dashboard.php" method="POST">
    
    <button type="submit" class="btn auth-btn">
        🔒 Sign In
    </button>
<a href="admin.php">Dashboard</a>
</form>
      </form>
    </div>
  </main>

<?php include "includes/footer.php"; ?>