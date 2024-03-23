<?php
session_start();
$userid = $_SESSION['userid'];
include '../config/koneksi.php';
if ($_SESSION['status'] != 'login'){
    echo "<script>
    alert('Anda belum login');
    location.href='../index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>

<style>
  .fa-download
  {
    color: black;
    font-size: 25px;
    position: relative;
    left: 5%;
  }

</style>

<body>
<nav class="navbar navbar-expand-lg body-tertiary" style="background-color: #000000;">
  <div class="container">
    <a class="navbar-brand" href="index.php" style="color: #ffffff;">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        <a href="../admin/home.php" class="nav-link" style="color: #ffffff;">Home</a>
        <a href="../admin/album.php" class="nav-link" style="color: #ffffff;">Album</a>
        <a href="../admin/foto.php" class="nav-link" style="color: #ffffff;">Foto</a>
      </div>
     <form class="d-flex" action="../config/search.php" method="GET">
  <input class="form-control me-2" type="search" placeholder="Cari foto..." aria-label="Search" name="query">
  <button class="btn btn-outline-primary" type="submit">Cari</button>
</form>
      <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">Keluar</a>
    </div>
  </div>
</nav>
<div class="container mt-2">
  <div class="row">

<?php
// Handle search query
if(isset($_GET['query'])) {
    $search_query = $_GET['query'];
    // Lakukan kueri pencarian di sini
    $query = mysqli_query($koneksi, "SELECT * FROM foto WHERE judulfoto LIKE '%$search_query%'");
} else {
    // Jika tidak ada pencarian, tampilkan semua foto
    $query = mysqli_query($koneksi, "SELECT * FROM foto INNER JOIN user ON foto.userid=user.userid 
  INNER JOIN album ON foto.albumid=album.albumid");
}
?>
    
<?php while($data = mysqli_fetch_array($query)): ?>
    <div class="col-md-3">
        <div class="card mb-2">
            <img src="../assets/img/<?php echo $data['lokasifile']; ?>" class="card-img-top" title="<?php echo $data['judulfoto']; ?>" style="height: 12rem;">
            <div class="card-footer text-center">
                <a href="../config/proses_like.php?fotoid=<?php echo $data['fotoid']; ?>" type="submit" name="suka"><i class="fa-regular fa-thumbs-up m-1"></i></a>
                <?php
                ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>
