<?php
namespace Home\Controller;
use Think\Controller;
class ContactUsController extends Controller {
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
}