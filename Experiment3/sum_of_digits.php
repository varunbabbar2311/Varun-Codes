<?php
$a=$_POST['usertext'];
$d=$a;
$c=0;
while($a/10!=0)
{
$b=$a%10;
$c=$c+$b*$b;
$a=$a/10;
}
echo "The Sum of $d digits is ".$c;
?>