<?php  


class Produk {
    public  $judul, 
            $penulis, 
            $penerbit, 
            $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }    
        
    public function getLabel() {
        return "$this->penulis, $this->penerbit, $this->harga";
    }
}


class CetakInfoProduk {
    public function cetak(produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("FFXIV", "Naoki Yoshida", "SQ","500000");
$produk2 = new Produk("Final Fantasy Ultimania Archive Volume 1","Square Enix","Dark Horse Comics","800000");

echo "Game : ". $produk1->getLabel();
echo "<br>";
echo "Novel : ". $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->Cetak($produk1);