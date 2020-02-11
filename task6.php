<DOCTYPE HTML>
<html>

<?php


 $value2= $_post["value1"]
 
$array = array(1, 2, 3, 4, 5);

  function search($value , $array)
  {
	  for($i=0;$i<count($array);$i++)
 {
	 if($value == $array[$i])
 {
	 
	 echo $value." was found at : ".$i."<br>";
 }
 }
 } 
 
  search($value2,$array);
?>
</html>