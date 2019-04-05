<html>
  <head>
    <title>Override - PHP OOP</title>
  </head>
  <body>
    <p>
    <?php
        class Mobil {
          public function bunyi() {
            return "BRUMM BRUMM!";
          }
        }
        
        class Sepeda extends Mobil {
            public function bunyi() {
            return "Beeb Beeb!";
          }
        }
        
       $kendaraan1 = new Sepeda();
      
	   echo $kendaraan1->bunyi();
    ?>
    </p>
  </body>
</html>