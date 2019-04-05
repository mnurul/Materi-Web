<?php
class rumus
{
	var $bil1;
	var $bil2;
	
	function statusInput()
	{
		$hitung = $this->bil1 / $this->bil2;
		return $hitung;
	}
	function __construct($x, $y)
	{
		$this->bil1 = $x;
		$this->bil2 = $y;
	}
}
$perkalian= new rumus(5, 2);
echo 'Hasil Pembagian : '.$perkalian->statusInput();
?>