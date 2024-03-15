<?php
require "class/Mahasiswa.php";
$mahasiswa=new Mahasiswa();

if(isset($_POST['insert'])){
    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $tahun_masuk=$_POST['tahun_masuk'];
    $insert=$mahasiswa->TambahMhs($nama,$jurusan,$tahun_masuk);
    if($insert==true){
        header("location:index.php");
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=$mahasiswa->HapusMhs($id);
    if($delete==true){
        header("location:index.php");
    }
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $tahun_masuk=$_POST['tahun_masuk'];
    $insert=$mahasiswa->UbahMhs($id,$nama,$jurusan,$tahun_masuk);
    if($insert==true){
        header("location:index.php");
    }
}