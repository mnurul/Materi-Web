<title>Perbedaan - PHP OOP</title>
<?php
// Procedural
$nilai = 60;
if($nilai >= 50)
     print "Lulus";
else
     print "Tidak Lulus";

echo "<br>";
	
// OOP
Class Nilai{ // Ini namanya Class
     
       protected $cek_nilai; 
       public function setNilai($nilai){ // Ini namanya Method (Function dalam class)
       // $nilai namanya property (Variable dalam class)
          
		  if($nilai >= 50)
              $this->cek_nilai ="Lulus";
          else
               $this->cek_nilai = "Tidak Lulus";
       }
      public function getNilai(){ // Ini namanya Method (Function dalam class)
              
          return $this->cek_nilai;
      }
}
$obj = new Nilai; // Ini namanya object
$obj->setNilai(50);
echo $obj->getNilai(); // Execute	 
?>