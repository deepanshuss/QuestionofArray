<?php
$a=array(1,4,8,9,2,5,7,-1,-7,17);
$length=count($a);


for($i=0;$i<$length; $i++)
{
    $d=$a[$i];
    
    for($j=$i+1;$j<=$length;$j++)
    {
       
        if($d+$a[$j]==10)
        {
             echo  "[" . $d ."," . $a[$j]."]" ;
             echo "\n";
        }
    }
}
?>
