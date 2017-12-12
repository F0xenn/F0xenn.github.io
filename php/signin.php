<html>
  <head>
    <meta charset="utf-8">
    <title>ThéoMax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
      <?php require("../jointures/nav.php"); ?>
      <form class="form_signin" method="post">
        <h2>Inscription</h2>
        <div class="form-input-user">
          <input type="text" name="pseudo" placeholder="Pseudo">
        </div>
        <div class="form-input-mail">
          <input type="email" name="mail" placeholder="Mail">
        </div>
        <div class="form-input-mail">
          <input type="email" name="mail2" placeholder="Confirmation Mail">
        </div>
        <div class="form-input-mdp">
          <input type="password" name="password" placeholder="●●●●●●●●">
        </div>
        <div class="form-input-mdp">
          <input type="password" name="password2" placeholder="●●●●●●●●">
        </div>
        <input type="checkbox" name="checkbox">
        <label for="checkbox">En envoyant ce formulaire, vous acceptez les <a href="">conditions d'utilisation</a></label>
        <center><button class="button" type="submit" name="signin_btn"></button></center>
      </form>
  </body>
</html>
