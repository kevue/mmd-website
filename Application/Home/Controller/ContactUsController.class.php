<?php
namespace Home\Controller;
use Think\Controller;
class ContactUsController extends Controller {
    public function index(){
    	$this->display('/Index/contact');
    }
}