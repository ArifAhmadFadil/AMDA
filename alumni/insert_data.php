<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "alumnida";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}

$nama_lengkap       ="";
$nam_panggilan      ="";
$email              ="";
$alamat_asal        ="";
$alamat_domisili    ="";
$nomor_hp           ="";
$status             ="";
$nama_kampus        ="";
$jurusan            ="";
$alamat_kampus      ="";
$bekerja            ="";
$alamat_kerja       ="";
$nama_pondok        ="";       
$alamat_pondok      ="";
$alumni_angkatan    ="";
$alumni_alumnus     ="";
$sukses             ="";
$error              ="";



if(isset($_POST['simpan'])){
    $no                 = $_POST['no'];
    $nama_lengkap       = $_POST['nama_lengkap'];
    $nam_panggilan      = $_POST['nam_panggilan'];
    $email              = $_POST['email'];
    $alamat_asal        = $_POST['alamat_asal'];
    $alamat_domisili    = $_POST['alamat_domisili'];
    $nomor_hp           = $_POST['nomor_hp'];
    $status             = $_POST['status'];
    $nama_kampus        = $_POST['nama_kampus'];
    $jurusan            = $_POST['jurusan'];
    $alamat_kampus      = $_POST['alamat_kampus'];
    $bekerja            = $_POST['bekerja'];
    $alamat_kerja       = $_POST['alamat_kerja'];
    $nama_pondok        = $_POST['nama_pondok'];
    $alamat_pondok      = $_POST['alamat_pondok'];
    $alumni_angkatan    = $_POST['alumni_angkatan'];
    $alumni_alumnus     = $_POST['alumni_alumnus'];
           

    if($nama_lengkap && $nam_panggilan && $email && $alamat_asal && $alamat_domisili && $nomor_hp && $status && $nama_kampus&& $jurusan && $alamat_kampus && $bekerja && $alamat_kerja && $nama_pondok && $alamat_pondok && $alumni_angkatan && $alumni_alumnus){
        $sql1   = "insert into alumni(nama_lengkap, nam_panggilan, email, alamat_asal, alamat_domisili, nomor_hp, status, nama_kampus, jurusan, alamat_kampus, bekerja, alamat_kerja, nama_pondok, alamat_pondok, alumni_angkatan, alumni_alumnus)
        values ('$nama_lengkap','$nam_panggilan','$email','$alamat_asal','$alamat_domisili','$nomor_hp','$status','$nama_kampus','$jurusan','$alamat_kampus','$bekerja','$alamat_kerja','$nama_pondok','$alamat_pondok','$alumni_angkatan','$alumni_alumnus')";
        // echo $sql1; //menampilkan query eror/sukses
        $q1     = mysqli_query($koneksi,$sql1);
        if($q1){
            $sukses     = "SUKSES MENAMBAH DATA BARU";
        }else{
            $error      = "GAGAL MENAMBAHKAN DATA / EROR";
        }
    }else {
        $error ="Lengkapi Data";
    }
}
?>