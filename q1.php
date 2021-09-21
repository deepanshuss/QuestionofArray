<?php

$a= array();
$b = readline('Enter the no: ');
for($i=0;$i<=$b;$i++){
    $input = readline('Enter the no: ');
    array_push($a,$input);
}
print_r($a);
echo count($a);
?>
