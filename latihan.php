<?php
class Produk
{
    public $namaProduk;
    protected $harga;
    private $diskon=0.1;

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
}
protected function getDiskon()
{protected function getDiskon()
    return ($this->harga*$this->diskon);
}
public function beli()
{
    return "Membeli Produk";
}

    public function cetak()
    {

        return "Nama Produk : $this->namaProduk ."<br>
        Harga : " .$this->harga . "<br>
        Diskon : ".$this->getDiskon();
    }
}
$produk = new produk;
$produk->namaProduk = "Obat Panadol ";
$produk->setHarga(10000);
echo $produk->beli()."<br>";
echo $produk->cetak();
