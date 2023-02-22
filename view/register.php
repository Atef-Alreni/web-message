<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>WEBMESSAGE | Register</title>
</head>

<body>
    <?php include "../view/partials/navbar.php"; ?>
    <div class="container">
        <form action="/register" method="post">
            <legend>Register</legend>
            <div>
                <input class="<?php if (isset($_SESSION["errors"]["name"])) : ?>error-border<?php endif; ?>" type="text" placeholder="Name" name="name" required>
                <?php if (isset($_SESSION["errors"]["name"])) : ?>
                    <p class="error-register"><?= $_SESSION["errors"]["name"]; ?> </p>
                <?php endif; ?>
            </div>
            <div>
                <input class="<?php if (isset($_SESSION["errors"]["email"])) : ?>error-border<?php endif; ?>" type="text" placeholder="Email" name="email" required>
                <?php if (isset($_SESSION["errors"]["email"])) : ?>
                    <p class="error-register"><?= $_SESSION["errors"]["email"]; ?> </p>
                <?php endif; ?>
            </div>
            <div>
                <input class="<?php if (isset($_SESSION["errors"]["username"])) : ?>error-border<?php endif; ?>" type="text" placeholder="Username" name="username" required>
                <?php if (isset($_SESSION["errors"]["username"])) : ?>
                    <p class="error-register"><?= $_SESSION["errors"]["username"]; ?> </p>
                <?php endif; ?>
            </div>
            <div>
                <input class="<?php if (isset($_SESSION["errors"]["password"])) : ?>error-border<?php endif; ?>" type="password" placeholder="Password" name="password" required>
                <?php if (isset($_SESSION["errors"]["password"])) : ?>
                    <p class="error-register"><?= $_SESSION["errors"]["password"]; ?> </p>
                <?php endif; ?>
            </div>
            <input class="register-btn" type="submit" value="Register" required>
        </form>
    </div>
    <?php include "../view/partials/footer.php"; ?>
</body>

</html>