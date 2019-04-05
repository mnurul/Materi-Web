<title>Abstract - PHP OOP</title>
<?php
abstract class komputer { // Ini abstract class

   abstract public function spesifikasi(); // Ini abstract method (Include)

   const PRICE = 20000000;

   public static function harga() { // Ini method biasa
     return self::PRICE;
   }
}
  
class laptop extends komputer {
  
   public function spesifikasi() { // Implementasi abstract method (Hilangkan)
     return "Lihat spesifikasi laptop";
   }
  
   public function merek_laptop() {
     return "ASUS ROG";
   }
}

// $abstrak = new komputer(); // Apakah bisa menginisiasi Abstract Class komputer?
// echo komputer::harga(); // Apakah bisa menginisiasi Abstract Class komputer dengan static method? (Ganti Spesifikasi) 
 
$beli = new laptop();
echo $beli->spesifikasi(); // (Hilangkan)
  
echo "<br />";
  
echo $beli->merek_laptop();

echo "<br />";

echo "Rp. ".$beli->harga();
?>