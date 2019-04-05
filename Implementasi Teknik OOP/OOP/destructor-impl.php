<title>Destructor Impl - PHP OOP</title>
<?php    
class Program {    
  
  function __construct() {     
	echo "Method awal untuk membangun program - ";    
  }     
  
  function __destruct() {    
    echo "- Method akhir akhir untuk mengakhiri program";    
  }
}

class Core {
  function Inti() {    
	echo "Method inti program ";     
  }
}   

$obj = new Program();    
//unset($obj);

$obj1 = new Core();  
echo $obj1->Inti();
?>