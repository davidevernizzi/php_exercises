<?php

$memo = array(
    0 => 0,
    1 => 1,
    2 => 1,
);

function fibo($n, &$memo)
{
    if (array_key_exists($n-1, $memo)) {
        $n_1 = $memo[$n-1];
    }
    else {
        $n_1 = fibo($n-1, $memo);
        $memo[$n-1] = $n_1;
    }

    if (array_key_exists($n-2, $memo)) {
        $n_2 = $memo[$n-2];
    }
    else {
        $n_2 = fibo($n-2, $memo);
        $memo[$n-2] = $n_2;
    }

    return $n_1 + $n_2;
}

echo fibo(6, $memo);
echo fibo(8, $memo);

?>
