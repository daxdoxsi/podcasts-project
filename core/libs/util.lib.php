<?php

function d($var = null){
    if (!is_null($var)){
        $output  = '<pre>';
        $output .= print_r($var, true);
        $output .= '</pre>';
        return $output;
    }
    return false;
}

