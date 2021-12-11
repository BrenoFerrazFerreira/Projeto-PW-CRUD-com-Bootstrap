<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
      <title>CRUD com Bootstrap</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="<?php echo BASEURL; ?>code-solid.svg" type="image/x-icon">

      <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
      <style>
          .btn-light {
            background-color : #999999;
            color : #FFFFFF;
          }
          .btn-light:hover {
            background-color : #888888;
            color : #FFFFFF;
          }
          #actions {
				    margin-top: 10px;
			    }
      </style>
      <link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/fontawesome.min.css">
      <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div style="margin-left:90px" class="container-fluid">
    <a class="navbar-brand" href="<?php echo BASEURL; ?>"><i class="fas fa-home"></i> Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-users"></i> Clientes</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers"><i class="fas fa-users"></i>Gerenciar Clientes</a></li>
            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php"><i class="fas fa-user-plus"></i>Novo Cliente</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-boxes"></i> Produtos</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>produtos"><i class="fas fa-boxes"></i>Gerenciar Produtos</a></li>
            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>produtos/add.php"><i class="fas fa-people-carry"></i>Novo Produto</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

      <main class="container">