<html>
  <head>
    <title>Inheritance - PHP OOP</title>
  </head>
  <body>
    <p>
      <?php
        class Venicle {
          public $wheel = true;
        }
        
        class Mobil extends Venicle {
          public $jazz = true;
        }
		
		class Sepeda {
			public $pixie = true;
		}
		
        $kendaraan1 = new Mobil();
		$kendaraan2 = new Sepeda();
        
		// Pemanggilan Class dengan Inheritance
        if (property_exists($kendaraan1, "jazz")) {
          echo "Saya mempunyai kendaraan beroda 4 yaitu mobil!";
        }
		echo "<br><br>";
		
        if (property_exists($kendaraan2, "pixie")) {
          echo "Saya mempunyai kendaraan beroda 2 yaitu sepeda!";
        }
		
		echo "<br><br>";
		
		// Implementasi Class dengan Inheritance
        if (property_exists($kendaraan1, "wheel")) { // Memangil variabel dari Class Venicle
          echo "Saya mempunyai kendaraan yang memiliki roda!";
        }
      ?>
    </p>
  </body>
</html>