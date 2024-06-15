<?php


namespace App\Helper\admin;


class GetTeamProfileLink
{
    public static function retunData($url, $link=null)
    {
        $explode = explode('@',$url);
        $url1 = end($explode);
        $url2 = explode('/',$url1);
        if ($link == 'yt'){
            $data  =  $url2[0];
        }else{
            $data =  end($url2) ;
        }
        return $data;

    }
}
