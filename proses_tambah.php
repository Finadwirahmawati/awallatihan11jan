<?php
include("koneksi.php");
if(isset($_POST['kirim_bayar'])){
    $Nama=$_POST['nama'];
    $Kelas=$_POST['kelas'];
    $Kelas=$_POST['jurusan'];
    $Kelas=$_POST['tahun'];
    $Kelas=$_POST['nominal'];

    $sql="INSERT INTO tb_siswa(nama, kelas) VALUES ('$Nama','$kelas' )";
    $query=mysqli_query($conn, $sql );
    $sql="INSERT INTO tb_jurusan(nama,jurusan) VALUES ('$jurusan' )";
    $query=mysqli_query($conn, $sql );
    $sql="INSERT INTO tb_spp(tahun, nominal) VALUES ('$Tahun','$Nominal' )";
    $query=mysqli_query($conn, $sql );

    if($query){
        header('localhost:join-table.php?status:sukses');
    }else{
        header('location:join-table.php?status:gagal');
    }
}
?>
