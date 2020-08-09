<?php

// Date formatting
function formatDate($date)
{
    return date('F j, Y, g:i a', strtotime($date));
}

// Shorten posts
function shortenText($text, $chars = 450)
{
    $text = $text . " ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text . "...";
    return $text;
}

function urlFormat($str)
{
    //Strip out all whitespace
    $str = preg_replace('/\s*/', '', $str);
    //Convert the string to all lowercase
    $str = strtolower($str);
    //URL Encode
    $str = urlencode($str);
    return $str;
}

function is_active($category)
{
    if (isset($_GET['category'])) {
        if ($_GET['category'] == $category) {
            return 'active';
        } else {
            return '';
        }
    } else {
        if ($category == null) {
            return 'active';
        }
    }
}
