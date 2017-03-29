<?php

function myStrRev($s)
{
    if (is_string($s)) {
        $b = '';
        for ($i = strlen($s)-1; $i >= 0; $i--) {
            $b.= $s[$i];
        }
        return $b;
    }
}