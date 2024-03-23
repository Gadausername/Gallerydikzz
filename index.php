<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " style="color: white;">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
  
  body {
    background-image: url('assets/anime2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }

.navbar {
  background-image: url('assets/anime2.jpg');
  background-color: transparent;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 1rem;
}

.navbar-brand{
  border-radius: 20px;
  backdrop-filter: blur(1px);
}

.navbar-text{
  backdrop-filter: blur(1px);
  border-radius: 15px;
}
    </style>


</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php" style="color: white;">Photo Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="wrapper">
<footer class="d-flex justify-content-center fixed-bottom" style="font-weight: bold; color: white;">
    <p>&copy; UKK GALLERY FOTO</p>
</footer>
    
<script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
</body>
</html>