<?php
   function sum($english,$meth,$science ) {
       $count = $english + $meth + $science; //sum my all subject number
       return $count;    
   }
   $total = sum(70,85,90); //I store the sum number for all of my subjects here. variable name: $total
   
   function percentage($sumTotal){
       echo $sumTotal / 3; //Here, I divided by 3 just because of my subject.$english,meth,science.
   }
   percentage($total);  
?>