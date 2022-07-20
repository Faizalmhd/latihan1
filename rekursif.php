<?php

function bil_faktorial($n=1){
    if($n==1){
        return 1;
    }else {
        return $n * bil_faktorial ($n-1);
    }
}

echo "bilangan faktorial 10 adalah ".bil_faktorial(10);

?>