<?php

function fibo($n)
{
    switch ($n) {
    case 0:
        return 0;
        break;
    case 1:
    case 2:
        return 1;
        break;
    default:
        return fibo($n-1) + fibo($n-2);

    }
}

assert(fibo(0) == 0);
assert(fibo(1) ==  1);
assert(fibo(2) ==  1);
assert(fibo(3) ==  2);
assert(fibo(4) ==  3);
assert(fibo(5) ==  5);
assert(fibo(6) ==  8);

?>
