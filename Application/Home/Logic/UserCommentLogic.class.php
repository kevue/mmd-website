<?php

/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 22:01
 */
namespace Home\Logic;
use Think\Model;

class UserCommentLogic extends Model {

    /**
     * 增加评论，业务逻辑
     * @param $userComment
     * @return mixed
     */
    public function addUserComment($userComment){

        if(empty($userComment))
            E('输入信息为空',900101);

        if(empty($userComment['userComment']))
            E('评论信息为空',900103);

        $userCommentIns = array();
        $userCommentIns['user_name'] = $userComment['userName'];
        $userCommentIns['user_phone'] = $userComment['userPhone'];
        $userCommentIns['user_email'] = $userComment['userEmail'];
        $userCommentIns['message'] = $userComment['userComment'];
        $userCommentModel = D('UserComment');
        $addResult = $userCommentModel->addUserComment($userCommentIns);
        if(false === $addResult){
            E('新增失败',100102);
        }

        return 'success';
    }

}