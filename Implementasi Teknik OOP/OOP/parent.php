<title>Parent - PHP OOP</title>
<?php
class komputer {
  
   public function spec() { // Ini Parent Method
     return "Spec Komputer : Acer, 
     Processor Intel core i3, Ram 2GB";
   }
}
  
class laptop extends komputer {
  
   public function spec() { // Ini Child Method
     return "Spec Laptop : Asus, 
     Processor Intel core i5, Ram 4GB, VGA NVIDIA GeForce 820m";
   }
    
   public function spec_komputer() { // Cara memanggil Parent Method
     return parent::spec();
   }
}

$hardware = new laptop();
  
// Panggil Method spec()
echo $hardware->spec();
 
echo "<br />";
 
// Panggil Method spec_komputer()
echo $hardware->spec_komputer();
?>