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
        <form action="/register" method="post">
            <legend>Register</legend>
            <input type="text" placeholder="Name" name="name" required>
            <input type="text" placeholder="Email" name="email" required>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <input class="register-btn" type="submit" value="Register" required>
        </form>
    </div>
    <?php include "../view/partials/footer.php"; ?>
</body>

</html>