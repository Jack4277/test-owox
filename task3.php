<?php
function arrayReverseKeys($a)
{
    if (is_array($a)) {
        $keys = array_keys($a);
        $values = array_values($a);
        $reverseArray = [];
        for($i = count($a)-1, $j = 0; $i<count($a); $i--, $j++)
        {
            $reverseArray[$keys[$i]] = $values[$j];
        }
        return $reverseArray;
    }
}