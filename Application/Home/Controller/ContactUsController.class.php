<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;
use Common\Util\Http\HttpUtil;

class ContactUsController extends BaseController {
    public function index(){
    	$this->display('/Index/contact');
    }

    public function addSubscribeEmail(){

		$userSubscribeEmail['subscribeEmail'] = I('post.subscribeEmail');
		$userSubscribeEmail['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
		$userSubscribeEmail['userIp'] = HttpUtil::getRealIp();

		try{
			$userCommentLogic = D('UserComment', 'Logic');
			$result = $userCommentLogic->addSubscribeEmail($userSubscribeEmail);

			$return = $this->returnSuccessData($result);
		}catch (Exception $e){
			$return  = $this->returnException($e);
		}

		$this->ajaxReturn($return);

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