<?php

function kangaroo($x1, $v1, $x2, $v2): string
{
    if ($x1 > $x2 == $v1 > $v2)
        return 'NO';

    $distance = abs($x1 - $x2);
    $steps = abs($v1 - $v2);

    return $distance % $steps == 0 ? 'YES' : 'NO';
}
