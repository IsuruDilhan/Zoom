<?php
class Chat extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->view->render('chat/ajax-chat',true);
    }
    public function signUp(){
        $this->view->render('index/signUp',false);
    }
}