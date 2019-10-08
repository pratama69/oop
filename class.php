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
  public $jml_kaki=4;
  public $mkn_fav="ikan";

  //Membuat method dengan nama bersuara
  public function bersuara()
  {
      return"Miaww";
  }
}
//membuat objek baru
//ditandai dengan keyword'new'
$kucing1=new Kucing();
$kucing1->warna="putih";
//var_dump($kucing1);
echo "Warna kucing;$kucing1->warna<br>";
echo "Suaranya:".$kucing1->bersuara();

class Perumahan
{
    public $blok;
    public $nomor_rumah;

    public function komplek()
    {
        return"Kopo Indah";
    }
}

$rumah1 = new Perumahan;
$rumah1->blok = "B";
$rumah1->nomor_rumah="12";

echo "Alamat Saya di komplek"
   .$rumah1->komplek()."Blok $rumah1->blok,Nomor $rumah1->);
   echo "Warna :".$kucing1->warna;
   echo "Suaranya:".$kucing1->bersuara();
   
   class Perumahan
   
    ?>