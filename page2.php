<DOCTYPE HTML>
<html>
<?php
$x=$_POST['vat'];
$y=$_POST['price'];

$z= ($x*$y)/100;

echo "vat result is $z";

?>
</html>