<?php

require_once 'App/init.php';

$produk1 = new Komik("FFXIV", "Naoki Yoshida", "SQ",500000, 1000);
$produk2 = new Game("Final Fantasy Ultimania Archive Volume 1","Square Enix","Dark Horse Comics",800000 ,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo  $cetakProduk->cetak();

echo  "<hr>";
new Coba();
