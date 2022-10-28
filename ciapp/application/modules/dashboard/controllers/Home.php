<?php
defined('BASEPATH') or exit ('Ação não permitida.');
class Home extends MY_Controller{
    public function index(){
        $data = array(
            'titulo' => 'Login',
            'styles' => array(
                'img/auth/login-bg.jpg'
            ),
            'scripts' => array(
                '/js/login.js'
            )
        );
        $this->load->view('index', $data);
    }
}

?>