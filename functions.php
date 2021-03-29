<?php
function getNearestPoints($arr, $x, $y){
    $nearestHolder = [];
    $closerHolder  =  closerPoints($arr,$x,$y);
    foreach($closerHolder as $k=>$v){
        $nearestHolder[]  = $arr[$k];
    }
    return $nearestHolder;
}
function closerPoints($arr,$x,$y){
    $closerHolder = [];
    foreach($arr as $key=>$val){
        $closerHolder[$key] = abs(intval( ($val[0])  - $x )) + abs(intval( ($val[1]) - $y ));
    }
    asort($closerHolder, SORT_NUMERIC);
    return $closerHolder;
}
