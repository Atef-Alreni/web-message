<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/styles.css">
  <title>WEBMESSAGE</title>
</head>

<body>
  <?php include "../view/partials/navbar.php"; ?>
  <?php if (isset($_SESSION["user"])) : ?>
    <div class="container logged-in-outer">
      <div class="logged-in-inner">
        <h1>Add Your Message</h1>
        <?php if (isset($_SESSION["error"])) : ?>
          <p class="error-box"><?= $_SESSION["error"]; ?></p>
        <?php endif; ?>
        <?php if (isset($_SESSION["success-message"])) : ?>
          <p class="success-message"><?= $_SESSION["success-message"] ?></p>
        <?php endif; ?>
        <form action="/addmessage" method="post">
          <textarea name="message" placeholder="Message" cols="30" rows="7"></textarea>
          <input type="submit" value="Add Message">
        </form>
        <div>
          <h1 class="messages-title">Messages</h1>
          <div class="messages-container">
            <?php if (isset($_SESSION["messages"]) && count($_SESSION["messages"]) > 0) : ?>
              <?php foreach ($_SESSION["messages"] as $messageData) { ?>
                <div class="message-container">
                  <header>
                    <h3><?php echo $messageData["AuthorName"] ?></h3>
                    <p><?php echo $messageData["CreatedAt"] ?></p>
                  </header>
                  <hr>
                  <p><?php echo $messageData["Message"] ?></p>
                </div>
              <?php } ?>
            <?php else : ?>
              <p>No Messages</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php else : ?>
    <main>
      <div class="container hero">
        <div class="hero-text">
          <h1>Join The Community of <strong>Developers</strong></h1>
          <p>Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations.</p>
          <form action="/register" method="get">
            <input type="text" placeholder="Join our newsletter for free" required>
            <input class="register-btn" type="submit" value="Join">
          </form>
          <div class="cards">
            <div class="card card-blue">
              <h3>Global Community</h3>
              <p>Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations. Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations.</p>
              <a href="/register">See more</a>
            </div>
            <div class="card card-green">
              <h3>Immersive Features</h3>
              <p>Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations. Welcome to the community of ambitious developers. Here Developers share their ideas and create innovations.</p>
              <a href="/register">See more</a>
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