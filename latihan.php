<?php
class Produk
{
    public $namaProduk;
    protected $harga;
    private $diskon=0.01;
    public function setDiskon(){
        $this->diskon*$this->harga;
    }
    public function beli(){
        return "Membeli Produk";
    }
}
class obat extends Produk{
    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function cetak(){
        return "Nama Produk : $this->namaProduk<br>Harga : $this->harga<br>Diskon : ".$this->setDiskon();
    }
}
$produk = new obat;
$produk->namaProduk = "Obat Panadol ";
$produk->setHarga(10000);
echo $produk->beli()."<br>";
echo $produk->cetak();

?>