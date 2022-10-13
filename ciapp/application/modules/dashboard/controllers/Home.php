<?php
defined('BASEPATH') or exit ('Ação não permitida.');

class Home extends MY_Controller{
    public function index(){
        $data = array(
            'titulo' => 'Home'
        );
        $this->load->view('index', $data);
    }
}

?>