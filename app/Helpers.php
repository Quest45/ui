<?php

if(!function_exists('getInfoPicture')) {
    function getInfoPicture($info) {
        if($info->info_cover_pic) {
            return 'storage/'.$info->info_cover_pic;
        }
        else {
            return 'img/img26.jpg' ;
        }
    }
}