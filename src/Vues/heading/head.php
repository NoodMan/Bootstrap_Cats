<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, , maximum-scale=1">
  <meta name="description" content="My site web Bar Cat">
  <meta name="keywords" content="shop, cat">
  <meta name="author" content="Adline">
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <title>
    Welcome - Homepage
  </title>
  <style>
    #form_controller {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-content: center;
      align-items: center;
      flex: 1 auto;
    }
  </style>
</head>
<!-- <i class="fas fa-home"></i> -->

<body>
  <header>
   
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">NoodCat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <!-- <a class="nav-link" href="<a class=" nav-link" href="<a href=" /cats" title="Look the cats"><i class="fas fa-cat fa-2x"></i></a> -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php if (isset($_SESSION['id'])) : ?>
                <a href=" /cat" title="Ajouter un chat"><i class="fas fa-plus fa-2x"></i></a>
                <?php endif ?>"</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php if (!isset($_SESSION['id'])) : ?>
                  <a href=" /" title="S'inscrire"><i class="fas fa-user-lock fa-2x"></i></a>
                  <?php endif ?>"</a>
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link" href="<a class=" nav-link" href="<?php if (isset($_SESSION['id'])) : ?> -->
                    <a href=" /logout" title="Se déconnecter"><i class="fas fa-sign-out-alt fa-2x"></i></a>
                    <span class="pseudo-blue"><?= $_SESSION['Type'] ?></span>
                    <?php endif ?>"</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="text" placeholder="Search">
                  <button class="btn btn-danger" type="button">Search</button>
                </form>
              </div>
            </div>
          </nav>
          &nbsp;
          <center><div class="alert alert-danger" role="alert">
              <i class="fas fa-cat fa-2x"></i>Don't forget to make a donation for our four-legged friends. <!--<a href="#" class="alert-link">an example link</a>--><em>Thanks for them.</em>
                <i class="far fa-heart fa-2x"></i></div></center>
           
        </header>