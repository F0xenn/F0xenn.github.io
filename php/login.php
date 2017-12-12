<html>
  <head>
    <meta charset="utf-8">
    <title>ThéoMax</title>
    <link rel="stylesheet" href="css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  </head>
  <body>
      <?php require("../jointures/nav.php"); ?>
        <form class="form_login" method="post">
          <h2 class="h2_principale">Connexion</h2>
          <div class="form-input-user">
            <input type="text" name="pseudo" placeholder="Pseudo">
          </div>
          <div class="text_ou"> ou </div>
          <div class="form-input-mail">
            <input type="email" name="mail" placeholder="Mail">
          </div>
          <div class="border_"></div>
          <div class="form-input-mdp">
            <input type="password" name="password" placeholder="●●●●●●●●">
          </div>
          <center><button class="button" type="submit" name="login_btn"></button></center>
        </form>
  </body>
</html>
