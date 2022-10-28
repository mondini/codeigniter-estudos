<?php
defined('BASEPATH') or exit ('Ação não permitida.');
class Sessions extends MY_Controller{
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
        $this->load->view('login', $data);
    }
    public function login(){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $lembrar = TRUE;
        if($this->ion_auth->logged_in()){
            $data = "logado";
            echo $data;
        }else{
            $log = $this->ion_auth->login($usuario, $senha, $lembrar);
            if($log == TRUE){
                $user_data = array(
                    'email' => $usuario,
                    'logged_in' => true,
                );
                $this->session->set_userdata($user_data);
                $data = true;
                echo $data;
            }else{
                $data = false;
                echo $data;
            }
        }
    }
    public function logout(){
        $this->ion_auth->logout();
        session_destroy();
        $data = true;
        echo $data;
    }
}


?>