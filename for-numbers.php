<?php
$rep="";
for ($i=2; $i<=100;$i++){
    $prime= true;
    for ($j=2; $j<$i/2; $j++){
        if ($i%$j==0){$prime=false;}
    }
    if ($prime){
        $rep.= $i . ", ";
    }
}
echo substr($rep,0,-2);