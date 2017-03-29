<?php

function checkBrackets($s)
{
    if (is_string($s)) {
        $stack = [];
        $open = ['[','{','('];
        $close = [']','}',')'];
        $error = false;
        for ($i = 0;$i <= strlen($s); $i++) {
            if (in_array($s[$i],$open)) {
                $stack[] = $s[$i];
            } elseif (in_array($s[$i],$close)) {
                if (count($stack) == 0) {
                    $error = true; // закрывающая скобка без открывающей
                    break;
                } elseif ((($stack[count($stack)-1] == '[') && ($s[$i] <> ']')) || (($stack[count($stack)-1] == '{') && ($s[$i] <> '}')) || (($stack[count($stack)-1] == '(') && ($s[$i] <> ')'))) {
                    $error = true; // закрывающая скобка не соответствует открывающей
                    break;
                } else {
                    $stack = array_pop($stack);
                }
            }
        }

        if ($error) {
            return false;
        }
        return true;
    }
}