<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/styles.css">
  <title>Document</title>
</head>

<body>
  <?php include "../view/partials/navbar.php"; ?>
  <?php if (isset($_SESSION["user"])) : ?>
    <div class="container logged-in">
      <h1>Successfull Log In</h1>
      <p>Welcome <?php echo $_SESSION["user"]; ?></p>
    </div>
  <?php else : ?>
    <main>
      <div class="container hero">
        <div class="hero-text">
          <h1>Join The Community of <strong>Developers</strong></h1>
          <p>Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations.</p>
          <form action="/login" method="get">
            <input type="text" placeholder="Join our newsletter for free">
            <input class="register-btn" type="submit" value="Join">
          </form>
          <div class="cards">
            <div class="card card-blue">
              <h3>Global Community</h3>
              <p>Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations. Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations.</p>
              <a href="/login">See more</a>
            </div>
            <div class="card card-green">
              <h3>Immersive Features</h3>
              <p>Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations. Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations.</p>
              <a href="/login">See more</a>
            </div>
          </div>
        </div>
        <div class="hero-img-container">
          <img src="./img/hero-img.svg" alt="">
        </div>
      </div>
    </main>
  <?php endif; ?>
  <?php include "../view/partials/footer.php"; ?>
</body>

</html>