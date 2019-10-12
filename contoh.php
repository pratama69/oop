<?php
class Kendaraan
{
    public $mobil = "Mobil";
    public function __construct()
    {
        echo "Mobil Yang Akan Dimasukan <br>";
    }

    public function __destruct()
    {
        echo "Mobil Keluar<br>";
    }
}
class Mobil extends Kendaraan
{
    public function __construct()
    {
        parent::__construct();
        echo "Buka Garasi<br>";
    }

    public function Diam()
    {
        echo "Tutup Garasi :";
    }

    public function __destruct()
    {
        echo "Mobil Yang Akan Di Keluarkan<br>";
        parent::__destruct();
    }
}
$kijang = new Mobil();
$kijang->diam();
echo $kijang->mobil . "<br>";