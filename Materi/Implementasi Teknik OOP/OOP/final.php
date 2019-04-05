<title>Final - PHP OOP</title>
<?php
class komputer{
   final function lihat_spec(){ // final method
     return "Lihat Spesifikasi Komputer";
   }
}
  
class laptop {
   public function lihat_spec(){
     return "Lihat Spesifikasi Laptop";
   }
}

$com = new laptop();
echo $com->lihat_spec();
?>