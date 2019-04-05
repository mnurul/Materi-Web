<title>Constructor - PHP OOP</title>
<?php
class makanan
{
 var $makan;
 var $nama;
 
 function statusMakan()
 {
 if ($this->makan >= 3) $perut = 'Kenyang';
 else $perut = 'Lapar';
 return $perut;
 }
 
 function namaOrang()
 {
 return $this->nama;
 }
 
 function lagiMakan()
 {
 return $this->makan;
 }
 
function __construct($x, $y)
 {
 $this->nama = $x;
 $this->makan = $y;
 }
}

$makanan1 = new makanan('Tianchan', 5, 12);
echo '<b>'.$makanan1->namaOrang().'</b> makan dalam sehari <b>'.$makanan1->lagiMakan().'x</b>, selalu merasa <b>'.$makanan1->statusMakan().'</b>';
?>