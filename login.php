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
    <base href="/Devfiles/4th_class/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1">
            <form class="uk-form-stacked js-login">

                <h2>Login</h2>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-email">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-email" type="email" required="required" placeholder="email@email.com">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-password">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-password" type="password" required="required" placeholder="Your Password">
                    </div>
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">LOGIN</button>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
