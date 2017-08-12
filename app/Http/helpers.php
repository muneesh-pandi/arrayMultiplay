<?php


//************* Start printTable Function *************//
  function printTable($array1,$array2){

            $m4=array();

            foreach($array1 as $k1=>$a1){
                $a             = $a1;
                $k2 = 0;
                $m4[$k1][$k2] = 0;
               foreach($array2 as $k2 =>$a2){
                 $b            = $a2;
                 $m4[$k1][$k2] = $b * $a ;
               }
            }
              return($m4);
          }

//************* End Function *************//

 

 ?>
