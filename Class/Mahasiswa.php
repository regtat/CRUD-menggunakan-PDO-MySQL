<?php
class Mahasiswa{
    private $db;
    public function __construct(){
        require 'koneksi.php';
        $this->db=$db;
    }
    public function LihatMhs(){
        $query=$this->db->query("select * from mahasiswa");
        $query->execute();
        return $query;
    }
    public function TambahMhs($nama,$jurusan,$tahun_masuk){
        $query=$this->db->prepare("insert into mahasiswa (nama,jurusan,tahun_masuk)values(:nama,:jurusan,:tahun_masuk)");
        $query->bindParam('nama', $nama);
        $query->bindParam('jurusan', $jurusan);
        $query->bindParam('tahun_masuk', $tahun_masuk);
        $query->execute();
        if($query){
            echo "<script>alert('Data berhasil ditambahkan.'); window.location='index.php';</script>";
        }else{
            echo "<script>alert('Data gagal ditambahkan.'); window.location='index.php';</script>";
        }
    }
    public function UbahMhs($id,$nama,$jurusan,$tahun_masuk){
        $query=$this->db->prepare("update mahasiswa set nama=:nama,jurusan=:jurusan,tahun_masuk=:tahun_masuk where id=:id");
        $query->bindParam('id', $id);
        $query->bindParam('nama', $nama);
        $query->bindParam('jurusan', $jurusan);
        $query->bindParam('tahun_masuk', $tahun_masuk);
        $query->execute();
        if($query){
            echo "<script>alert('Data berhasil diubah.'); window.location='index.php';</script>";
        }else{
            echo "<script>alert('Data gagal diubah.'); window.location='index.php';</script>";
        }
    }
    public function AmbilMhs($id){
        $query=$this->db->prepare("select * from mahasiswa where id=:id");
        $query->bindParam('id', $id);
        $query->execute();
        if($query){
            return $query;
        }
    }
    public function HapusMhs($id){
        $query=$this->db->prepare("delete from mahasiswa where id=:id");
        $query->bindParam('id', $id);
        $query->execute();
        if($query){
            echo "<script>alert('Data berhasil dihapus.'); window.location='index.php';</script>";
        }else{
            echo "<script>alert('Data gagal dihapus.'); window.location='index.php';</script>";
        }
    }
}