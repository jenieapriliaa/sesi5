<?php
   include("konfigurasi.php");
 
 $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

 if($cnn){
    $tbel = "tbMHS";
    $sql = "CREATE TABLE $tbel(
       id INT UNSIGNED AUTO_INCREMENT Primary Key, 
       nama Varchar(35),
       nim Varchar(10),
       alamat Varchar(255),
       telp Varchar(15),
       prodi Varchar(25),
       jeniskelamin Varchar(1),
       tgllahir Date
    )";
    $hasil = mysqli_query($cnn, $sql );
    if($hasil){
        echo "Pembuatan tabel " . $tbel . "Sukses";
    }else{
        echo "Pembuatan tabel" . $tbel . "Gagal";
    }
 }else{
    echo "Koneksi ke Mysql Gagal";
 }