<?php
include("koneksi.php")
isset($_GET['simpan']);
      $kode= $_GET['id']; 

      $aql = " DELETE FROM tb_pasien WHERE id=$kode";
      $query = mysqli_query($koneksi, $sql);

      if($query){
         header('localtion:pasien.php?status=sukses');
      }else{
         die ("akses dilarang")
      }