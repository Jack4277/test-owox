<?php

function searchInArray($a, $b)
{
    if (is_array($a)) {
        if ($b < $a[0] || $b > $a[count($a)-1]) {
            return false;
        } else {
            return true;
        }
    }
}