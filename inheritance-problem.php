<?php  


class Produk {
    public  $judul, 
            $penulis, 
            $penerbit, 
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;  
        $this->tipe = $tipe;
    }    
        
    public function getLabel() {
        return "$this->penulis, $this->penerbit, $this->harga";
    }

    public function getInfoLengkap() {
        // Novel
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if( $this->tipe == "Game") {
            $str .= " - ($this->waktuMain) Jam.";
        }

        return $str;
    }
}


class CetakInfoProduk {
    public function cetak(produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("FFXIV", "Naoki Yoshida", "SQ",500000,0, 1000, "Game");
$produk2 = new Produk("Final Fantasy Ultimania Archive Volume 1","Square Enix","Dark Horse Comics",800000,50, 0, "Komik");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();