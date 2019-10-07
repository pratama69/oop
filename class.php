<?php
//1.Class adalah sebuah blueprint/template
//untuk membuat instance dari object
//2.Class mendefinisikan object
//3.Class menyimpan data(property)dan
//  prilaku(method)

//Membuat class dengan nama kucing
class Kucing
{
  //Membuat Property
  public $warna="Coklat";
  public $jml_kaki="4";
  public $mkn_fav="ikan";

  //Membuat method dengan nama bersuara
  public function bersuara()
  {
      return"Miaww";
  }
}
//membuat objek baru
$kucing1=new Kucing();
var_dump($kucing1);
