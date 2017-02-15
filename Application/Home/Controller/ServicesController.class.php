<?php
namespace Home\Controller;
use Think\Controller;
class ServicesController extends Controller {
    public function index(){
    	$this->display('/Index/services');
    }
}