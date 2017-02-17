<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;

class ContactUsController extends BaseController {
    public function index(){
    	$this->display('/Index/contact');
    }

    public function addSubscribeEmail(){

    	$subscribeEmail = I('post.subscribeEmail');

    	$result =  array();
    	$result['code'] = 0;
    	$result['description'] = 'success';
    	echo json_encode($result);

    }

	public function addComment(){

		$comment['userName'] = I('post.userName');
		$comment['userPhone'] = I('post.userPhone');
		$comment['userEmail'] = I('post.userEmail');
		$comment['userComment'] = I('post.userComment');

		try{

			$userCommentLogic = D('UserComment', 'Logic');
			$result = $userCommentLogic->addUserComment($comment);

			$return = $this->returnSuccessData($result);
		}catch (Exception $e){
			$return  = $this->returnException($e);
		}

		$this->ajaxReturn($return);
	}
}