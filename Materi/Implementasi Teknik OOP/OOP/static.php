<title>Static - PHP OOP</title>
<?php
class HP {
 
   // Static property
   public static $harga;
   public static $laba;
  
   // Static method
   public static function beli() {
     return "Asus Zenphone 4s";
   }
   
   // Mengakses property dan method pada Class sendiri
   public static function jual() {
     return "Harga Jual : ".self::$laba." - ".self::beli();
	}
}

 /* class Smartphone extends HP {
  
   // Static method
   public static function beli() {
     echo parent::beli();
   }
   
   // Static method dengan mengakses property pada Class sendiri
   public static function jual() {
     return "Harga Jual : ".parent::$laba;
	}
} */
  
// Set static property
HP::$harga='1.500.000';
HP::$laba='2.000.000';

// Call static property
echo "Harga : Rp ".HP::$harga;
  
echo "<br>";
  
// Call static method
echo HP::beli();

echo "<br>";

// Call static method dengan Self
echo HP::jual();

/*
// Class Smartphone
echo "<br><br>";

// Set static property
Smartphone::$harga='1.200.000';
Smartphone::$laba='1.800.000';

// Call static property
echo "Harga : Rp ".Smartphone::$harga;
  
echo "<br>";
  
// Call static method
echo Smartphone::beli();

echo "<br>";

// Call static method dengan Self
echo Smartphone::jual(); */
?>