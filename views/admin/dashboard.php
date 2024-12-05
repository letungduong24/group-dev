<?php
    require_once APP_ROOT . '/config/Config.php';
    include APP_ROOT . '/views/partials/header.php';
?>

<body>
    <?php include APP_ROOT . '/views/partials/navbar.php'; ?>
    <div class="wrap-login">
        <h3>DAshbaord</h3>
        <form class="logout-form" method="POST" action="<?php echo BASE_URL . '/controllers/LogoutController.php'; ?>">
            <button type="submit" class="btn btn-dark search-btn">Đăng xuất</button>
        </form>
    </div>
</body>