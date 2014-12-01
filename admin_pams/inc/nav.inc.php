<html>
<head>

  <link href="../css/bootstrap.css" rel="stylesheet" media="all" type="text/css"> 
  <link href="../css/bootstrap-theme.css" rel="stylesheet" media="all" type="text/css"> 
  <link href="../css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css"> 
  <link href="../css/bootstrap-theme.min.css" rel="stylesheet" media="all" type="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="fr" />
  <title>  nav barre </title>
 
</head>


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
      <a class="navbar-brand" href="#">Titre de la page</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Général<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#">Présentation<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#">Galeries<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#">Photos<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#">Messages<span class="sr-only">(current)</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Compte <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>Nom de l'utilisateur</li>
            <li><a href="#">Déconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
