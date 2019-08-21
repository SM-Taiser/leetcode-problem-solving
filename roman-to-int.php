<?php
function convert($r){
    if($r=='I'){
        return 1;
    }else if($r=='V'){
        return 5;
    }else if($r=='X'){
        return 10;
    }else if($r=='L'){
        return 50;
    }else if($r=='C'){
        return 100;
    }else if($r=='D'){
        return 500;
    }else if($r=='M'){
        return 1000;
    }
}

$s = "MDCXCV";
$res = 0;
for($i=0 ;$i<strlen($s); $i++){
    $s1 = convert($s[$i]);
    if($i+1 < strlen($s)){
        $s2 = convert($s[$i+1]);
        if($s1 >= $s2){
          $res += $s1 ;
        }else{
          $res = $res + $s2 - $s1; 
          $i++; 
        }

   }else
   {  
       $res = $res + $s1; 
       $i++;   
   } 
 }
 echo $res;

?>