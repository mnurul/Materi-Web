<title>Overloading - PHP OOP</title>
<?php    
class Overload    
{    
  public function __call($name, $arguments)    
  {    
    echo "Memanggil method $name : "    
       . implode(' - ', $arguments);    
  }    
  
  public static function __callStatic($name, $arguments)    
  {    
    echo "Memanggil method $name : "    
       . implode(' - ', $arguments);    
  }    
}    
  
$obj = new Overload;    
  
$obj->Kendaraan('Mobil','Motor','Truk');
Overload::Pesawat('Jet','Roket','Helikopter');     
?>