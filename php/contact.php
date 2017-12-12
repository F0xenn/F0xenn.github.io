<html>
  <head>
    <meta charset="utf-8">
    <title>ThéoMax</title>
    <link rel="stylesheet" href="css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  </head>
  <body>
    <div class="site_container">
      <?php require("../jointures/nav.php"); ?>
      <form class="form_contact" method="post">
        <h2 class="h2_principale">Contact</h2>
          <input type="text" name="nom" placeholder="Nom">
          <input type="text" name="prenom" placeholder="Prénom">
          <input type="text" name="objet" placeholder="Objet">
          <input type="email" name="mail" placeholder="Email">
          <textarea name="text" placeholder="Votre message..."></textarea>
        <center><button class="button" type="submit" name="contact_btn"></button></center>
      </form>
    </div>
  </body>
</html>
