<title>Override Nilai - PHP OOP</title>
<?php

function getMhs($mhs) {
  return $mhs;
} 

   class Fasilkom_A
   {
     public $mahasiswa = 90;
	 
     function nilai(){
	 $mhs = getMhs($this); // Cara curang untuk mengakali $this dengan mengganti namanya, namun tetap saja sama isinya $this.
	 if ($mhs->mahasiswa == 100) $status = 'Jenius';
     else if ($mhs->mahasiswa >50 ) $status = 'Pintar';
	 else  $status = 'Belajar lagi!!!';
	 
     return $status;
     }	 
   }
 
   class Fasilkom_B extends Fasilkom_A
   {
     public $mahasiswa = 40;
     }
	 
	class Fasilkom_E extends Fasilkom_A
   {
     public $mahasiswa = 100;
     }
	
   $A = new Fasilkom_A(); // Variable $this telah menjadi ketentuan dalam PHP dan tidak bisa ditetapkan nilai baru.
	   echo $A->nilai();  // Variable $this hanya bisa ditetapkan di dalam Class yang melakukan eksekusi pada Function yang memiliki Class.
 
   echo "<br><br>";
 
   $B = new Fasilkom_B();
	   echo $B->nilai();
	   
	   echo "<br><br>";
	   
	$E = new Fasilkom_E();
	   echo $E->nilai();
?>