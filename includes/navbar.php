<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <title>Network Project</title>
    
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>

<header class="main-header">
    <nav class="navbar">
        <div class="logo-container">
            <a href="index.php">
                <img src="assets/images/speedtest/network.png" alt="Network Logo" class="site-logo">
                <span class="logo-text">NETWORK</span>
            </a>
        </div>

        <ul class="nav-links">
            <li>
                <a href="index.php" class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
            </li>
            <li>
                <a href="ethernet.php" class="nav-item <?php echo ($current_page == 'ethernet.php') ? 'active' : ''; ?>">Ethernet</a>
            </li>
            <li>
                <a href="wireless.php" class="nav-item <?php echo ($current_page == 'wireless.php') ? 'active' : ''; ?>">Wireless</a>
            </li>
            <li>
                <a href="comparison.php" class="nav-item <?php echo ($current_page == 'comparison.php') ? 'active' : ''; ?>">Comparison</a>
            </li>
            <li>
                <a href="speedtest.php" class="nav-item <?php echo ($current_page == 'speedtest.php') ? 'active' : ''; ?>">Speed Test</a>
            </li>
            <li>
                <a href="faq.php" class="nav-item <?php echo ($current_page == 'faq.php') ? 'active' : ''; ?>">FAQ</a>
            </li>
        </ul>

        <div class="user-action">
            <a href="login.php" class="admin-btn <?php echo ($current_page == 'login.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-user-shield"></i>
                <span>Admin</span>
            </a>
        </div>
    </nav>
</header>