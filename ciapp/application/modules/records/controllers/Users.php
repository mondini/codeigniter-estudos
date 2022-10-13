<?php

defined('BASEPATH') or exit ('Ação não permitida.');

class Users extends MY_Controller{
    //Lista usuários
    public function lista(){
        $data = array(
            'titulo' => 'Usuários cadastrados',
            'subtitulo' => 'Lista de usuários cadastrados.',
            'styles' => array(
                'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css',               
            ),

            'scripts' => array(
                'plugins/datatables.net/js/jquery.dataTables.min.js',
                'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                'js/datatables.js',
            ),
            'usuarios' => $users = $this->ion_auth->users()->result(), //retorna todos os usuários
        );
        $this->load->view('list-users', $data);
    }
    //Edita usuários
    public function edit($usuario_id = NULL){
        if(!$usuario_id){
            echo 'Usuário inválido!';
            exit;
        }else{
            if(!$this->ion_auth->user($usuario_id)->row()){
                exit('Usuário não existe!');
            }else{
                //Editar usuário
                $this->form_validation->set_rules('first_name', 'Nome', 'trim|required|min_length[5]|max_length[20]');
                $this->form_validation->set_rules('last_name', 'Sobrenome', 'trim|required|min_length[5]|max_length[20]');
                if($this->form_validation->run()){
                    echo '<pre>';
                    print_r($this->input->post());
                    exit;
                }else{
                    $data = array(
                        'titulo' => 'Edição de usuário',
                        'icone_view' => 'ik ik-user',
                        //retorna do usuário
                        'usuario' => $this->ion_auth->user($usuario_id)->row(),
                        'perfil_usuario' => $this->ion_auth->get_users_groups($usuario_id)->row(),
                    );
                    $this->load->view('edit-users', $data);
                }
            }
        }
    }
}

?>