<?php
/** .-------------------------------------------------------------------
 * | 函数库
 * '-------------------------------------------------------------------*/
//?m=links&a=colltroller/entry/index
//url('links.entry.index')
function url($path){
    $path=strtolower($path);
    $pathInfo=explode('.',$path);
    return __ROOT__.'/?m='.$pathInfo[0].'&a=controller/'.$pathInfo[1].'/'.$pathInfo[2];
}