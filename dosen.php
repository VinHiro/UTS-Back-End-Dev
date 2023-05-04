<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB Stikom Bali</title>
    <style>
        .tabel {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.tabel td, .tabel th {
  border: 1px solid #ddd;
  padding: 8px;
}

.tabel tr:nth-child(even){background-color: #f2f2f2;}

.tabel tr:hover {background-color: #ddd;}

.tabel th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
    </style>
   
</head>

<body>
     <!-- bagian menu -->
     <nav class="navbar sticky-top navbar-expand-lg">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">STIKOM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="home.html">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="matkul.html">Matakuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dosen.html">dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kerja_praktek.html">Kerja Praktek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form.html">mahasiswa</a>
                </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- bagian menu -->

    <form action="proses.php" method="POST">
        <fieldset>
            <legend>Form input data Dosen</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>NIDN (Nomor Induk Dosen Nasional)</td>
                    <td>:</td>
                    <td><input type="number" name="nidn"></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td>:</td>
                    <td><input type="text" name="nama_dosen"></td>
                </tr>
                <tr>
                    <td>No.Telp</td>
                    <td>:</td>
                    <td><input type="text" name="no_telp"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <table style="width: 100%; border: 1px solid black; margin-top: 10px;" class="tabel">
        <tr>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>No.Telp</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
        <?php 
            include "koneksi.php";

            $qry = "SELECT * FROM mahasiswa";
            $exec = mysqli_query($con, $qry);

            while($data = mysqli_fetch_assoc($exec)){

            
        ?>
        <tr>
            <td><?= $data['nidn']?></td>
            <td><?= $data['nama_dosen']?></td>
            <td><?= $data['no_telp']?></td>
            <td><?= $data['email']?></td>
            <td><?= $data['alamat']?></td>
            <td>
                <a href="edit.php?nim=<?= $data['nim']?>">
            <button>edit</button></a>
                <a href="delete.php?nim=<?= $data['nim'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <button>Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    
</body>

</html>