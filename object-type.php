<?php
class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "pernebit",
    $harga = 0;

  public function __construct($judul, $penulis, $penerbit, $harga)
  {
    $this->judul    = $judul;
    $this->penulis  = $penulis;
    $this->penerbit = $penerbit;
    $this->harga    = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Seirei Gensouki", "Kitayama Yuri", "Shousetsuka ni Narou", 70000, 250, 0, "Novel");
$produk2 = new Produk("Sword Art Online : Alicization Rising Steel", "Reki Kawahara", "ASCII Media Works", 0, 0, 800, "Game");

echo "Light Novel : " . $produk1->getLabel();
echo "</br>";
echo "Game : " . $produk2->getLabel();
echo "</br>";

$infoProduk1 = new CetakInfoProduk();
$infoProduk2 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "</br>";
echo $infoProduk2->cetak($produk2);
