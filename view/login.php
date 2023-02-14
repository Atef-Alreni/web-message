<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>Document</title>
</head>

<body>
    <?php include "../view/partials/navbar.php"; ?>
    <div class="container">
        <form action="/login" method="post">
            <legend>Log In</legend>
            <?php if (isset($_SESSION["error"])) : ?>
                <p class="error-login"><?php echo $_SESSION["error"]; ?></p>
            <?php endif; ?>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <input class="register-btn" type="submit" value="Log In">
        </form>
    </div>
    <?php include "../view/partials/footer.php"; ?>
</body>

</html>