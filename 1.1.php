<!DOCTYPE html>
<html>
<body>

<?php  
$b = 4;
for ($x = 1; $x < 6; $x++) {
  echo str_repeat("&nbsp;&nbsp;&nbsp;", $b) ; // because 1 &nbsp; != 1 String
  echo str_repeat("O", $x) ;
  echo "<br>";
  $b -= 1;
}
?>  

</body>
</html>