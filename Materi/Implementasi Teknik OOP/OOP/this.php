<title>$this - PHP OOP</title>
<?php
function getIni($ini) {
  return $ini;
} 

class IT
{
public $result = 100;
	
function brain(){
$ini = getIni($this);
if ($ini->result == 100) $me = 'Jenius';
	else $me = 'Normal People';

return $me;
	}	 
}

$obj = new IT();
echo $obj->brain();
?>