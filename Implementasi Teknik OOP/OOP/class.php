<title>Class - PHP OOP</title>
<?php
class kendaraan  // Class
{
 var $harga; // Property
 var $merek;
 var $roda;
 var $warna;
 var $type;

 function statusHarga() // Method
 {
 if ($this->harga > 50000000) $status = 'Mahal';
 else $status = 'Murah';
 return $status;
 }
 function statType()
 {
 if ($this->type != 2) $stat = 'Beroda Satu atau lebih dari Dua';
 else $stat = 'Beroda Dua';
 return $stat;
 }
 function setHarga($x) // Method
 {
 $this->harga = $x;
 }
 function setMerek($x) // Method
 {
 $this->merek = $x;
 }
 function setroda($rd) // Method
 {
 $this->type = $rd;
 }
 function setwarna($wr) // Method
 {
 $this->warna = $wr;
 }
}
$kendaraan1 = new kendaraan(); // Object
$kendaraan1->setMerek('Yamaha MIO');
$kendaraan1->setHarga(10000000);
$kendaraan1->setroda(2);
$kendaraan1->setwarna('Merah');

$kendaraan2 = new kendaraan(); // Object
$kendaraan2->setMerek('Toyota Yaris');
$kendaraan2->setHarga(160000000);

echo "Kendaraan seharga <b>$kendaraan1->harga</b> dengan merek <b>$kendaraan1->merek</b> dan ";
echo "<b>";
echo $kendaraan1->statType();
echo "</b> berwarna ";
echo "<b>";
echo $kendaraan1->warna;
echo "</b> :";
echo "<br>";

echo $kendaraan1->merek;
echo " termasuk ";
echo $kendaraan1->statusHarga();

echo "<br><br>";

echo "Kendaraan seharga $kendaraan2->harga termasuk : <br>";
echo $kendaraan2->merek;
echo " - ";
echo $kendaraan2->statusHarga();