<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="daftar.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="design.php">Design</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container informasi">
        <h2 class="header mb-5">Selamat Datang di Komunitas Kucing</h2>

        <div class="row">
            <div class="col-md-5">
                <img src="kucing.jpg" alt="Kucing" class="gambar-kucing">
            </div>
      

            <div class="col-md-7"> 
                <div class="card deskripsi mb-4">   
                    <p> Kucing adalah hewan peliharaan yang luar biasa dengan sejarah panjang dan beragam manfaat. Dari membantu mengendalikan hama hingga memberikan dukungan emosional, kucing telah membuktikan diri sebagai teman setia dan bermanfaat bagi manusia. Jika Anda mempertimbangkan untuk memelihara kucing, pastikan untuk memberikan perawatan yang tepat, termasuk makanan bergizi, tempat tinggal yang aman, dan perhatian medis yang teratur.</p>
                    
                    <p> Saat ini, kucing adalah salah satu hewan peliharaan terpopuler di dunia. Kucing yang garis keturunannya tercatat secara resmi sebagai kucing trah atau galur murni (pure breed) contohnya persia, siam, manx, dan sphinx. Kucing seperti ini biasanya dibiakkan di tempat pemeliharaan hewan resmi.</p>
                </div>
                    
                <div class="card jenis">
                    <h5>Jenis-Jenis Kucing</h5>
                    <ol>
                        <li>Kucing Persia</li>
                        <li>Kucing Maine Coon</li>
                        <li>Kucing American Shorthair</li>
                        <li>Kucing Sphynxes</li>
                        <li>Kucing British Shorthair</li>
                        <li>DLL.</li>
                    </ol>
                </div>
            </div>
        </div>
        <a class="btn btn-primary mb-3 ms-5" href="https://wolipop.detik.com/home/d-5180681/15-jenis-kucing-peliharaan-yang-populer-menggemaskan-dan-mudah-dirawat" role="button" target="_blank">Informasi Lebih Lanjut</a>

    </div>
</body>
</html>