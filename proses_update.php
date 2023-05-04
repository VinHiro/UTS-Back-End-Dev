<?php 
// Kode untuk proses update data mahasiswa
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['nohp'];
    $email = $_POST['email'];

    include "koneksi.php";

    $qry = "UPDATE mahasiswa SET
            nama_mhs = '$nama_mhs',
            kode_jurusan = '$kode_jurusan',
            gender = '$gender',
            alamat = '$alamat',
            no_hp = '$no_hp',
            email = '$email'
            WHERE nim = '$nim'
            ";
    $exec = mysqli_query($con, $qry)or die(mysqli_error($con));

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'form.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }

// Kode untuk proses update data dosen
    $nidn = $_POST['nidn'];
    $nama_dosen = $_POST['nama_dosen'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    include "koneksi.php";

    $qry = "UPDATE dosen SET
            nama_dosen = '$nama_dosen',
            email = '$email'
            no_hp = '$no_hp',
            alamat = '$alamat',
            WHERE nidn = '$nidn'
            ";
    $exec = mysqli_query($con, $qry)or die(mysqli_error($con));

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'dosen.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }

// Kode untuk proses update data Matakuliah
    $kode_matkul = $_POST['kode_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];

    include "koneksi.php";

    $qry = "UPDATE matkul SET
            nama_matkul = '$nama_matkul',
            sks = '$sks'
            WHERE kode_matkul = '$kode_matkul'
            ";
    $exec = mysqli_query($con, $qry)or die(mysqli_error($con));

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'matkul.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }
    

// Kode untuk proses update data kerja praktek
    $nim = $_POST['nim'];
    $nama_perusahaan  = $_POST['nama_perusahaan '];
    $alamat_perusahaan  = $_POST['alamat_perusahaan '];
    $tanggal_mulai  = $_POST['tanggal_mulai '];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $dosen_pembimbing  = $_POST['dosen_pembimbing '];

    include "koneksi.php";

    $qry = "UPDATE kerja_praktek SET
            nama_perusahaan = '$nama_perusahaan',
            alamat_perusahaan = '$alamat_perusahaan',
            tanggal_mulai = '$tanggal_mulai',
            tanggal_selesai = '$tanggal_selesai',
            dosen_pembimbing = '$dosen_pembimbing',
            WHERE nim = '$nim'
            ";
    $exec = mysqli_query($con, $qry)or die(mysqli_error($con));

    if($exec){
        echo "<script>window.alert('Data berhasil disimpan'); 
        window.location = 'kerja_praktek.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal disimpan');</script>";
        var_dump($exec);
    }
  
?>