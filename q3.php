<?php
$a="i am a string";
$b=strlen($a);

for($i=0;$i<$b;$i++)
  {
      $count=1;
    $s=$a[$i];
    for($j=0;$j<$b;$j++)
    {
       
       if($i==$j)
       {
           continue;
       }

      elseif($s==$a[$j])
       {
           $count++;
       }

       
    }
  print_r('count of'.$s.'is' . $count ."\n");


   }
   
   ?>
