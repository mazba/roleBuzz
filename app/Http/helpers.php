<?php
/******************************************
*   Created by m@zba on 2/25/18.
*	Custom Helper Function File
*
******************************************/

if (! function_exists('readMoreString')) {
    function readMoreString($str,$limit=40){
        if(strlen($str)>$limit){
            $stringCut = substr($str, 0, $limit);
            $serRpos = strrpos($stringCut, ' ');
            $first_part = substr(substr($str, 0, $limit), 0,$serRpos);
            $last_part = substr($str,$serRpos);
            return $first_part.'<span title="Show More" class="hidden-more-text" onclick="showText(this)"> >><span>'.$last_part.'</span></span>';
        }
        else
            return $str;
    }
}
