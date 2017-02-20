<?php
namespace Common\Util\Http;

/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/2/20
 * Time: 23:48
 */
class HttpUtil
{
    public static function getRealIp(){

        if (getenv('HTTP_CLIENT_IP'))
        {
            $ip = getenv('HTTP_CLIENT_IP'); //可伪造
        }
        elseif (getenv('HTTP_X_FORWARDED_FOR'))
        {
            $ip = getenv('HTTP_X_FORWARDED_FOR'); //可伪造
        }
        elseif (getenv('HTTP_X_FORWARDED'))
        {
            $ip = getenv('HTTP_X_FORWARDED');
        }
        elseif (getenv('HTTP_FORWARDED_FOR'))
        {
            $ip = getenv('HTTP_FORWARDED_FOR');
        }
        elseif (getenv('HTTP_FORWARDED'))
        {
            $ip = getenv('HTTP_FORWARDED');
        }
        else
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }


}