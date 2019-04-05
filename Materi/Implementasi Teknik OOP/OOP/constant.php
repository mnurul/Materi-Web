<title>Constant - PHP OOP</title>
<?php
class laptop {
  
   const DOLLAR = 14000;
  
   public function beli_laptop($harga) {
     return "Beli Komputer Baru, Rp. ".$harga*self::DOLLAR;
   }
}
  
$laptop_baru=new laptop();
  
echo $laptop_baru->beli_laptop('500');
?>