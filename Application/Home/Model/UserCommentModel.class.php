<?php

/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 21:57
 */
namespace Home\Model;
use Think\Model;

class UserCommentModel extends Model
{

    /**
     * 增加评论
     * @param $userComment
     * @return mixed
     */
    public function addUserComment($userComment){

        $userComment['create_time'] = time();
        return $this->add($userComment);
    }
}