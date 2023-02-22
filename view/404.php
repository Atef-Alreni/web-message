<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/404.css">
    <title>404</title>
</head>

<body>
    <?php include_once __DIR__ . "/partials/navbar.php" ?>
    <div class="ooops">
        <div class="container">
            <h1>Ooops...</h1>
            <p>Something went wrong</p>
        </div>
    </div>
    <div class="container helper-options relative">
        <p class="watermark">404</p>
        <img class="hand-written-line" src="./img/hand-written-line.svg" alt="Hand-written line">
        <h1>Maybe one of these will help</h1>
        <div class="helper-btns">
            <a class="helper-btn blue" href="/">Home</a>
            <a class="helper-btn green" href="/register">Register</a>
            <a class="helper-btn red" href="/login">Log in</a>
        </div>
    </div>
    <?php include_once __DIR__ . "/partials/footer.php" ?>
</body>

</html>