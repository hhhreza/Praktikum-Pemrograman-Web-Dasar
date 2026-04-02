<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['sudah_daftar']) || $_SESSION['sudah_daftar'] != true) {
    echo "<script>
            alert('Akses ditolak! Anda harus mendaftar terlebih dahulu.');
            window.location.href = 'index.php';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-atas" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Komunitas Kucing</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="daftar.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="design.php">Design</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

    <div class="container design">
        <h2 class="header text-center mt-5">Design Laboratory</h2> 
        <p class="text-center">Image Effect</p>
        <div class="text-center">
            <img src="kucingdesign.jpg" alt="Design Kucing" class="gambar-design mt-2">
        </div>

    </div>

    
</body>
</html>