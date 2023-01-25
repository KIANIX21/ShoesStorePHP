<?php 
        // Buat koneksi
        $con = mysqli_connect("localhost","root","","homyped_store");
        // Cek koneksi
        if(!$con){
            die("Tidak Menemukan Koneksi");
        }
        return $con;
?>