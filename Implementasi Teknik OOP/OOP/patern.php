<style>
td {
padding: 3px;
min-width: 20px;
line-height: 20px;
text-align: center;
font: 11px Tahoma;
}
td.red {
background: red;
color: #fff;
}
</style>
<?php
$column = 31;
$row = 200;
$code = array('P2','SP','PP','M2','L','L','S2');
// create table
echo "<table cellpadding='0' cellspacing='0' border='1'>";

// create table header
echo "<tr>\n<td>No</td>\n";
for ($c=1; $c<=$column; $c++)
{
echo "<td>$c</td>\n";
}
echo "</tr>\n";

// create row
$key = 0;
for ($r=1; $r<=$row; $r++)
{
echo "<tr>\n<td>$r</td>\n";

for ($c=1; $c<=$column; $c++)
{
echo "<td";
if ($code[$key]=="L") echo " class='red'";
echo ">$code[$key]</td>\n";
$key++;
if ($key>=count($code)) $key = 0;
}
if ($key-2 <0) $key = count($code) + $key - 2;
else $key = $key - 2;
echo "</tr>\n";
}

echo "</table>";