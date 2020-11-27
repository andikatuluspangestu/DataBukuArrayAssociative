<?php
  if (!isset($_GET['judul'])) {
    header('Location: index.php');
  }

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>Data Buku <?php echo $_GET["judul"]; ?></title>
  </head>
  <body>

  <div class="container">
  <br><br>
  <div class="card shadow-lg border-0 mb-3" style="max-width: 100%; height: 520px;">
  <div class="row g-0">
  <div class="col-md-4">
      <img src="<?php echo $_GET["gambar"]; ?>" style="width: 70%; margin: 60px;">
    </div>
    <div class="col-md-8">
      <div class="card-body" style="margin-top: 45px;">
        <h5 class="card-title"><b><?php echo $_GET["judul"]; ?></b></h5>
        Karya : <?php echo $_GET['karangan']; ?>
        <br><br>
        <?php echo $_GET["deskripsi"]; ?>
        <p class="card-text"><small class="text-muted">No. <?php echo $_GET['ISBN']; ?></small></p>
      </div>
    </div>
  </div>
</div>
  
  </div>
    
    
    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
  </body>
</html>
