<!DOCTYPE html>
<html lang="en">

<body>
  <div class="bg-dark">
    <header class="container header">
      <a class="logo" href="/">
        <img src="./img/logo.svg" alt="Logo for WEBBMESSAGE. A message icon" />
        WEBMESSAGE
      </a>
      <nav class="nav">
        <?php if (isset($_SESSION["user"])) : ?>
          <p><?php echo $_SESSION["user"][1]; ?></p>
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