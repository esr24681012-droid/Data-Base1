<?php
?>

<nav class="navbar">
    <div class="logo">Esraa</div>

    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="pro.php">Profile</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

  
</nav>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    body {
        margin: 0;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #1f2937;
        padding: 15px 50px;
        color: white;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .nav-links {
        display: flex;
        list-style: none;
        gap: 30px;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        transition: 0.3s;
    }

    .nav-links a:hover {
        color: #ffd166;
    }

    .btn-login {
        background: #ffd166;
        color: #1f2937;
        text-decoration: none;
        padding: 10px 18px;
        border-radius: 8px;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            gap: 15px;
            padding: 20px;
        }

        .nav-links {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
    }
</style>
