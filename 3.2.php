<!DOCTYPE html>
<html>
<body>
<?php  
$marks =array( 
    "mohammad"=>array( 
    "physics"=>35, "maths"=>30, 
    "chemistry"=>39 
    ), 
    "qadir"=>array( 
    "physics"=>30, "maths"=>32, "chemistry"=>29 
    ), 
    "zara"=>array( 
    "physics"=>31, "maths"=>22, "chemistry"=>39 
    ) 
    );

echo $marks["mohammad"]["physics"]; // answer of 3.2.1

echo $marks["mohammad"]["physics"],"&nbsp;";// answer of 3.2.2
echo $marks["mohammad"]["maths"],"&nbsp;";
echo $marks["mohammad"]["chemistry"],"&nbsp;";
echo $marks["qadir"]["physics"],"&nbsp;";
echo $marks["qadir"]["maths"],"&nbsp;";
echo $marks["qadir"]["chemistry"],"&nbsp;";
echo $marks["zara"]["physics"],"&nbsp;";
echo $marks["zara"]["maths"],"&nbsp;";
echo $marks["zara"]["chemistry"],"&nbsp;";
?>  
</body>
</html>