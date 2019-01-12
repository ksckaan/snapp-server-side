<?php
//MYSQL Bağlantısı
try {
     $db = new PDO("mysql:host=localhost;dbname=snapp;charset=utf8", "root", "K3ghostrider;");
} catch ( PDOException $e ){
     echo 'Hata: '.$e->getMessage();
} ?>