<?php
$a=array(3,8,9,3,1,7,2,8);
$em=array();
for($i=0;$i<100;$i++)
{
     if(in_array($i,$a))
       {
          array_push($em,$i);
       }
}
  print_r($em);
  ?>
