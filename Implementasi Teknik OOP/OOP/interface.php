<title>Interface - PHP OOP</title>
<?php
interface news { // Ini object interface

   const KATEGORI = "Berita Politik"; // Bisakah interface menggunakan Konstanta Class?

   public function publish(); // Coba ganti Hak Aksesnya
   public function editor();
   
   /*public function Method(){
     return "Ini method biasa!";
   }*/  
}
  
class kompas implements news { // Cara penurunan interface
   public function publish() { // Method 1 yang di implemetasikan dari interface
     return "Berita Hangat - Rupiah kembali menguat Rp.13.000";
   }
   public function editor() { // Method 2 yang di implemetasikan dari interface
     return "Berhubung dollar melemah DPR ajukan pembelian 101 laptop dengan butget 1,6 M (katanya harga 1 laptop tidak kurang dari 10juta)<br>Laptop digunakan untuk ngetik hasil rapat, presentasi dan simpen bahan-bahan.<br>
	 <br><a href='http://megapolitan.kompas.com/read/2015/10/09/07210171/DPRD.DKI.Ajukan.Anggaran.Pembelian.Laptop.Rp.1.6.Miliar'><img src='img/laptop.png'/></a>";
   }
}
 
$berita = new kompas();
echo "<b>".$berita->publish()."</b>";
echo " - Category : ".news::KATEGORI; // Implementasi Konstanta Class

echo "<br>";

echo $berita->editor();
?>