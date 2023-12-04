<?php 

function dnaDiff(string $dna1, string $dna2):bool|int{
    if (strlen($dna1)!=strlen($dna2)){
        return false;
    }else{
        $diff=0;
        for ($i=0; i<strlen($dna1);$i++){
            if ($dna1[$i]!=$dna2[$i]){
                $diff++;
            }
        }
        return $diff;
    }
}