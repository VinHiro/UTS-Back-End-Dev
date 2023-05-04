<?php
// Hapus data mahasiswa
    $nim = $_GET['nim'];
    include "koneksi.php";
    $qry = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    $exec = mysqli_query($con, $qry)or die(mysqli_error($con));

    if($exec){
        echo "<script>window.alert('Data berhasil dihapus');
        window.location = 'form.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal dihapus');</script>";
        var_dump($exec);
    }

    // Hapus data dosen
    $nidn = $_GET['nidn'];
        include "koneksi.php";
        $qry = "DELETE FROM dosen WHERE nidn = '$nidn'";
        $exec = mysqli_query($con, $qry) or die(mysqli_error($con));

        if($exec){
            echo "<script>window.alert('Data dosen berhasil dihapus');
            window.location = 'dosen.php';</script>";
        }else{
            echo "<script>window.alert('Data dosen gagal dihapus');</script>";
            var_dump($exec);
        }

        // Hapus data kerja praktek
        $nim = $_GET['nim'];
    include "koneksi.php";
    $qry = "DELETE FROM kerja_praktek WHERE nim = '$nim'";
    $exec = mysqli_query($con, $qry) or die(mysqli_error($con));

    if($exec){
        echo "<script>window.alert('Data berhasil dihapus');
        window.location = 'kerja_praktek.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal dihapus');</script>";
        var_dump($exec);
    }

    //Hapus Data Matakuliah
    $kode_matkul = $_GET['kode_matkul'];
    include "koneksi.php";
    $qry = "DELETE FROM matakuliah WHERE kode_matkul = '$kode_matkul'";
    $exec = mysqli_query($con, $qry)or die(mysqli_error($con));

    if($exec){
        echo "<script>window.alert('Data berhasil dihapus');
        window.location = 'matkul.php';</script>";
    }else{
        echo "<script>window.alert('Data gagal dihapus');</script>";
        var_dump($exec);
    }
?>