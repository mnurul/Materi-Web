<title>Constructor Nilai - PHP OOP</title>
<?php
class Perkalian {     
  var $bil1;    
  var $bil2;    

  function __construct($x, $y) {    
    $this->bil1 = $x;    
    $this->bil2 = $y;    
  }    

  function hasil() {    
       $hasil = $this->bil1 * $this->bil2;    
       return $hasil;    
  }    
}

 $rumus = new Perkalian(7,7);    

 echo "Hasil Perkalian = ".$rumus->hasil();
?>