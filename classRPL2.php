<?php
class RPL2
{
    public $nama;
    public $jk;
    public $alamat;
    public $hobi;
    public $tinggi;
    public function Cetak_biodata(){
        $biodata = "<h2>Biodata</h2>Nama : ".$this->nama."<br>Jenis Kelamin : ".$this->jk."<br>Alamat : 
        ".$this->alamat."<br>Hobi : ".$this->hobi."<br>Tinggi Badan : ".$this->tinggi;
        return $biodata;
    }
}
$siswa1 = new RPL2;
$siswa1->nama="Vina";
$siswa1->jk="Perempuan";
$siswa1->alamat="Rancamanyar";
$siswa1->hobi="berenang";
$siswa1->tinggi=156;
echo $siswa1->Cetak_biodata();
echo "<br><br>";
$siswa2 = new RPL2;
$siswa2->nama="Ikoy";
$siswa2->jk="Laki-laki";
$siswa2->alamat="Pasar Desa";
$siswa2->hobi="Futsal";
$siswa2->tinggi=175;
echo $siswa2->Cetak_biodata();
echo "<br><br>";
$siswa3 = new RPL2;
$siswa3->nama="Hadi";
$siswa3->jk="Laki-laki";
$siswa3->alamat="Kopo elok";
$siswa3->hobi="Main Game";
$siswa3->tinggi=175;
echo $siswa3->Cetak_biodata();

?>