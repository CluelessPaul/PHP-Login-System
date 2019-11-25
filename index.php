<?php
    // Allow the config
    define('__CONFIG__', true);
    // Require the config
    require_once 'inc/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="follow">
    <title>Title</title>

    <!-- <base href="/PHP-Login-System/" /> -->
    <base href="/Devfiles/PHP-Login-System/" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css" />
</head>
<body>

    <div class="uk-section uk-container">
        <?php
            echo 'Hello World, Today is: '.'<br>';
            echo date('Y m d');
        ?>
        <p>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </p>

    </div>

    <?php require_once  'inc/footer.php'; ?>

</body>
</html>
