<title>Enkapsulasi - PHP OOP</title>
<?php

class Facebook {

   public $status;
   // Public : Seluruh method dan property di luar Class bisa di akses, termasuk Class turunan.
   
   public function update_status() {
     return "Hidup itu tantangan, so keep spirit!";
   }
}
 
$fb = new Facebook();
 
$fb->status="Someone (Public) :<br>";
echo $fb->status;
echo $fb->update_status();
?>

<?php
echo "<br><br>";
?>

<?php

class Facebook_Protected {

   protected $username="Someone (Protected) :<br>";
   public $status="Hidup itu memang tantangan, tantangan itu adalah melupakan kamu.<br><br>"; // Ganti jadi private (Example)
   /* Protected : Property dan method tidak bisa diakses dari luar Class,
                  namun bisa diakses oleh Class itu sendiri atau turunan Class tersebut.*/
				  
   public function protected_username() {
	  return $this->username;
   }
}

class Protected_status extends Facebook_Protected { // Hapus Facebook_Protected (Example)

   public function protected_status_update() {
      return $this->status;
   }
}
 
$fb_protected = new Facebook_Protected();
$fb_status = new Protected_status();
 
echo $fb_protected->protected_username();
echo $fb_status->protected_status_update();
?>

<?php

class Facebook_Private {

   private $username="Someone (Private) :<br>";
   /* Private : Jika sebuah property dan method di setting sebagai Private,
                maka satu-satunya yang bisa mengakses adalah Class itu sendiri.*/

   public function private_username() {
      return $this->username;
   }
   private function private_status() {
      return "Dari dulu aku selalu berjuang demi kamu, orang seperti apa aku ini yang selalu mengharapkan kamu!.";
   }
   public function private_status_update() {
      return $this->private_status();
   }
}
 
$fb_private = new Facebook_Private();
 
echo $fb_private->private_username();
echo $fb_private->private_status_update();

?>