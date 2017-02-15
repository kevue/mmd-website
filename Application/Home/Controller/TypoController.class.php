<?php
namespace Home\Controller;
use Think\Controller;
class TypoController extends Controller {
    public function index(){
    	$this->display('/Index/typo');
    }
}