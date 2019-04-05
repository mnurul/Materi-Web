<title>Destructor - PHP OOP</title>
<?php    
class Persegi {    
  var $panjang;     
  var $lebar;     
  
  function __construct($x,$y) {     
   $this->panjang = $x;     
   $this->lebar = $y;     
  }     
  
  function __destruct() {    
    echo "Destruction Nilai Properti";    
  }

  //function luas() {    
  //$hasil = $this->panjang * $this->lebar;    
  //return $hasil;    
  //}
}    

$obj = new Persegi(7,7);    
//unset($obj);
  
 // menampilkan hasil dari method luas  
 // echo "Luas = ".$obj->luas();
?>