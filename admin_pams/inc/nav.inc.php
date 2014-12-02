<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand" >Titre de la page</span>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../controller/homeController.php">Accueil<span class="sr-only">(current)</span></a></li>
        <li><a href="../controller/generalController.php">Général<span class="sr-only">(current)</span></a></li>
        <li><a href="../controller/presentController.php">Présentation<span class="sr-only">(current)</span></a></li>
        <li><a href="../controller/galleriesController.php">Galeries<span class="sr-only">(current)</span></a></li>
        <li><a href="../controller/messagesController.php">Messages<span class="sr-only">(current)</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Compte <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>Nom de l'utilisateur</li>
            <li><a href="#">Déconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
