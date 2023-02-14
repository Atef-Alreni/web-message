<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div class="bg-dark">
    <header class="container header">
      <a class="logo" href="/">
        <img src="./img/logo.svg" alt="Logo for WEBBMESSAGE. A message icon" />
        WEBMESSAGE
      </a>
      <nav class="nav">
        <?php if (isset($_SESSION["user"])) : ?>
          <p><?php echo $_SESSION["user"] ?></p>
          <a class="logout-btn" href="/logout">Log out</a>
        <?php else : ?>
          <a class="" href="/login">log in</a>
          <a class="register-btn" href="/register">register</a>
        <?php endif; ?>
      </nav>
    </header>
  </div>
</body>

</html>