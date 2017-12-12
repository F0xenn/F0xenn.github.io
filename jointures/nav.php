<head>
  <link rel="stylesheet" href="css/nav.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<header class="header">
  <div class="wrapper">
    <div class="header__icon menu-icon-cross">
      <span></span>
    </div>
    <a href="accueil" class="header__logo"><p class="header__text">ThéoMax</p></a>
    <nav class="menu">
      <a href="accueil" class=""><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
      <a href="contact" class=""><i class="fa fa-envelope" aria-hidden="true"></i> Nous contacter</a>
          <?php
          if(isset($_SESSION['id'])){
          ?>
          <a href="profil.php?id=<?= $_SESSION['id'] ?>" class=""><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['pseudo']; ?></a>
          <a href="deconnexion.php" class=""><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnexion</a>
          <?php
          }else{
          ?>
          <a href="login" class=""><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a>
          <a href="signin" class=""><i class="fa fa-user-plus" aria-hidden="true"></i> Inscription</a>
          <?php
          }
          ?>
    </nav>
  </div>
</header>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/humburger-nav.js"></script>
<script type="text/javascript" src="js/menu-nav.js"></script>
