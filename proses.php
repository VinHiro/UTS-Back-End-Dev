<?php 
// Kode untuk proses  data mahasiswa
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['nohp'];
    $email = $_POST['email'];

    include "koneksi.php";

    $qry = "INSERT INTO mahasiswa VALUES(
        '$nim','$nama_mhs','$jurusan','$gender','$alamat','$no_hp','$email'
    )";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'form.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }

    // Kode untuk proses  data dosen
    $nidn = $_POST['nidn'];
    $nama_dosen = $_POST['nama_dosen'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    include "koneksi.php";

    $qry = "INSERT INTO dosen VALUES(
        '$nidn','$nama_dosen','$email','$no_telp','$alamat'
    )";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'dosen.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }

    // Kode untuk proses  data Matakuliah
    $kode_matkul = $_POST['kode_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];

    include "koneksi.php";

    $qry = "INSERT INTO matkul VALUES(
        '$kode_matkul','$nama_matkul','$sks'
    )";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'matkul.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }

    // Kode untuk proses  data kerja praktek
    $nim = $_POST['nim'];
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $alamat_perusahaan = $_POST['alamat_perusahaan'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $dosen_pembimbing = $_POST['dosen_pembimbing'];

    include "koneksi.php";

    $qry = "INSERT INTO kerja_praktek VALUES(
        '$nim','$nama_perusahaan','$alamat_perusahaan','$tanggal_mulai','$tanggal_selesai','$dosen_pembimbing'
    )";

    $exec = mysqli_query($con, $qry);

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'kerja_praktek.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }

?>