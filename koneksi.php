<?php
        $koneksi = new mysqli('localhost', 'root', '', 'db_user');
        if ($koneksi) {
            echo "Koneksi berhasil";
        }else{
            echo $koneksi->eror;
        }
?>