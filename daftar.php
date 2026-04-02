<?php 
session_start();
include 'koneksi.php'; 

if (isset($_POST['submit_daftar'])) {
    $nama      = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $umur      = $_POST['umur'];
    $j_kelamin = $_POST['j_kelamin']; 
    $daerah    = $_POST['daerah'];
    $alasan    = $_POST['alasan'];
    
    $hobi = "";
    if (isset($_POST['hobi'])) {
        $hobi = implode(", ", $_POST['hobi']); 
    }

    $query = "INSERT INTO daftar (nama, tgl_lahir, umur, j_kelamin, hobi, daerah, alasan) 
              VALUES ('$nama', '$tgl_lahir', '$umur', '$j_kelamin', '$hobi', '$daerah', '$alasan')";
    
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['sudah_daftar'] = true;
        header('Location: design.php');
        exit();
    } else {
        echo "<script>alert('Gagal mendaftar: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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
                    <a class="nav-link active" href="daftar.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="design.php">Design</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

    <div class="container informasi">
        <h3 class="text-center mb-4">Pendaftaran Komunitas Kucing
        </h3>

            <div class="card kotak">
                <div class="card-body">
                    <form action="" method="POST">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                        </div>

                        <div class="mb-3">
                            <label for="umur" class="form-label">Kelompok Umur</label>
                            <select class="form-select" id="umur" name="umur">
                                <option value="" disabled selected>Pilih Kelompok Umur</option>
                                <option value="anak">Anak-Anak</option>
                                <option value="remaja">Remaja</option>
                                <option value="dewasa">Dewasa</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <div>
                                <input type="radio" name="jk" id="laki" value="laki">
                                <label for="laki">Laki-laki</label>
                            </div>
                            <div>
                                <input type="radio" name="jk" id="perempuan" value="perempuan">
                                <label for="perempuan">Perempuan</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="hobi" class="form-label">Hobi</label>
                            <div>
                                <input type="checkbox" name="hobi[]" id="membaca" value="membaca">
                                <label for="membaca">Membaca</label>
                            </div>
                            <div>
                                <input type="checkbox" name="hobi[]" id="main game" value="main game">
                                <label for="main game">Main game</label>
                            </div>
                            <div>
                                <input type="checkbox" name="hobi[]" id="ngoding" value="ngoding">
                                <label for="ngoding">Ngoding</label>
                            </div>
                            <div>
                                <input type="checkbox" name="hobi[]" id="olahraga" value="olahraga">
                                <label for="olahraga">Olahraga</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="asal" class="form-label">Asal Daerah</label>
                            <input type="text" class="form-control" id="asal" name="asal">
                        </div>
                        <div class="mb-3">
                            <label for="alasan" class="form-label">Alasan ingin Bergabung</label>
                            <textarea class="form-control" id="alasan" name="alasan" rows="3"></textarea>
                        </div>

                        <button type="submit" name="submit_daftar" class="btn btn-success mt-3 w-100">KIRIM PENDAFTARAN</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>