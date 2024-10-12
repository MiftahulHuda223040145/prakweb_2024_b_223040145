<?php 

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){ //diterima = v
        $this->judul = $judul; //lalu dipakai untuk menggantikan property nya ==
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000); //instansiasi (dibuat objek) dan dikirim ke constructor ^
$produk2 = new Produk("Uncharted", "Neil Duckman", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");

echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();

var_dump($produk3);