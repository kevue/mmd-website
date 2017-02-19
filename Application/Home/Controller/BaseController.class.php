<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 22:52
 */

namespace Home\Controller;
use Think\Controller;
use Think\Log;


class BaseController extends Controller
{

    protected function returnSuccessData($data){

        $return = array();
        $return['errCode'] = 0;
        $return['data'] = $data;
        $return['description'] = 'SUCCESS';

        return $return;
    }

    protected function returnException($e){

        $return = array();
        if(!$e->getCode()){
            $return['errCode'] = 0;
            $return['description'] = '系统异常';
        }else{
            $return['errCode'] = $e->getCode();
            $return['description'] = $e->getMessage();
        }

        return $return;
    }
}