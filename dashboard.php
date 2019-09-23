<?php
    // Allow the config
    define('__CONFIG__', true);
    // Require the config
    require_once 'inc/config.php';
    Page::ForceLogin();

    $User = new User($_SESSION['user_id']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="follow">

    <title>Dashboard</title>

    <base href="/Devfiles/4th_class/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container">
        Dashboard here; You are signed in as user: <?php echo $_SESSION['user_id']; ?>
    </div>
    <?php require_once 'inc/footer.php'?>
</body>
</html>