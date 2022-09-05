<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <style>
    .togg{
      border: none;
    }
    .togg:focus {
      box-shadow: none;
      border: none;
    }
    .navbar {
      z-index: 3;
    }
  </style>
  <div class="position-fixed start-0 top-0 end-0 navbar navbar-expand-lg navbar-dark text-bg-dark shadow">
    <div class="container">
      <a class="navbar-brand h1 mb-0" href="#">Anime</a>
      <button class="navbar-toggler togg" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon ic"></div>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto gap-1">
          <a class="nav-link" href="index.php?page=beranda">Beranda</a>
          <a class="nav-link" href="index.php?page=terbaru">Terbaru</a>
          <a class="nav-link" href="index.php?page=populer">Populer</a>
          <a class="nav-link" href="index.php?page=contact">Contact</a>
        </div>
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="#"><i class='bx bxl-facebook-circle'></i></a>
          <a class="nav-link" href="#"><i class='bx bxl-instagram-alt'></i></a>
          <a class="nav-link" href="#"><i class='bx bxl-twitter' ></i></a>
        </div>
      </div>
    </div>
  </div>