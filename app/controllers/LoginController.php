<?php

class LoginController extends \HXPHP\System\Controller
{
     public function __construct($configs) {
        parent::__construct($configs);
        $this->load(
                'Services\Auth', $configs->auth->after_login, $configs->auth->after_logout, TRUE
        );
        $this->auth->redirectCheck(TRUE);
    }
    
    public function logarAction(){
        $this->view->setFile('index');
        $post = $this->request->post();
        if (!empty($post)){
            User::login($post);
        }
    }
}