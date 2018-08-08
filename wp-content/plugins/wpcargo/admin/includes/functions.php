<?php
function wpcargo_html_value( $string, $htmltag = 'span', $attr = 'class' ){
    $string    = trim( $string );
    $attrvalue = strtolower( str_replace(" ", '-', $string ) );
    $attrvalue = preg_replace("/[^A-Za-z0-9 -]/", '', $attrvalue);
    return '<'.$htmltag.' '.$attr.' ="'.$attrvalue.'" >'.$string.'</'.$htmltag.'>';
}