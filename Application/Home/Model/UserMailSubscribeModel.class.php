<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/2/20
 * Time: 23:56
 */

namespace Home\Model;
use Think\Model;


class UserMailSubscribeModel extends Model
{

    /**
     * 增加邮箱关注记录
     * @param $userMailSubscribe
     * @return mixed
     */
    public function addUserMailSubscribe($userMailSubscribe){
        $userMailSubscribe['create_time'] = time();
        return $this->add($userMailSubscribe);
    }
}