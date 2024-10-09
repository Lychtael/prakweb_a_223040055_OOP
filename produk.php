<?php  


class Produk {
    public  $judul = "judul", 
            $penulis = "penulis", 
            $penerbit = "penerbit", 
            $harga = 0;

    public function sayHello() {
        return "Hi";
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1->judul);

// $produk2 = new Produk();
// $produk2->judul = "FFXIV";
// $produk2->tambahProperty = "12334";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "FFXIV";
$produk3->penulis = "Naoki Yoshida";
$produk3->penerbit = "SQ";
$produk3->harga = 600000;

$produk4 = new Produk();
$produk4->judul = "Final Fantasy Ultimania Archive Volume 1";
$produk4->penulis = "SQ";
$produk4->penerbit = "Dark Horse Comics";
$produk4->harga = 450000;

echo "Game : ". $produk3->getLabel();
echo "<br>";
echo "Novel : ". $produk4->getLabel();