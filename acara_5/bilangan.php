<?php
function terbesar($x, $y)
{
    if ( $x > $y){
        $max = $x;
    }
    if ($y > $x){
        $max = $y;
    }
    echo "Nilai Terbesar Adalah ",$max;
}
terbesar(1000,600);
?>