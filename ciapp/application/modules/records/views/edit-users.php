<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/navbar');?>

<div class = "page-wrap">
    <?php $this->load->view('templates/sidebar'); ?>
                
    <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="<?php echo $icone_view; ?> bg-blue"></i>
                                        <div class="d-inline">
                                            <h5><?php echo $titulo; ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a data-toggle="tooltip" data-placement="bottom" title="Home" href="<?php echo base_url('/');?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a data-toggle="tooltip" data-placement="bottom" title="Usuários" href="<?php echo base_url('/records/users/lista');?>">Usuários</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                            <div class="card">
                                    <div class="card-header"><h6><?php echo(isset($usuario) ? '<i class="ik ik-calendar ik-1x pr-5"></i>Ultima alteração: '. formata_data_banco_com_hora($usuario->last_update) : '');?></h6></div>
                                    <div class="card-body">
                                        <form class="forms-sample" nome="form_edit_user" method="POST">
                                            <div class="card-body">
                                                <div class="text-center"> 
                                                    <img src="<?php echo base_url('assets/img/user.jpg');?>" class="rounded-circle" width="110" />
                                                    <h4 class="card-title mt-10"><?php echo(isset($usuario) ? $usuario->first_name : '');?></h4>
                                                    <p class="card-subtitle"><?php echo(isset($usuario) ? $usuario->first_name : '');?></p>
                                                    <div class="row text-center justify-content-md-center"></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 mb-5">
                                                    <label>Nome</label>
                                                    <input name="first_name" value="<?php echo(isset($usuario) ? $usuario->first_name : set_value('first_name'));?>" type="text" class="form-control" placeholder="Username">
                                                    <?php echo form_error('first_name', '<div class="text-danger">', '</div>')?>
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <label>Sobrenome</label>
                                                    <input name="last_name" value="<?php echo(isset($usuario) ? $usuario->last_name : set_value('first_name'));?>" type="text" class="form-control" placeholder="Username">
                                                    <?php echo form_error('last_name', '<div class="text-danger">', '</div>')?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 mb-5">    
                                                    <label>Login</label>
                                                    <input name="username" value="<?php echo(isset($usuario) ? $usuario->username : set_value('email'));?>" type="text" class="form-control" placeholder="E-mail" readonly>
                                                    <?php echo form_error('username', '<div class="text-danger">', '</div>')?>
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <label for="exampleInputEmail1">E-mail</label>
                                                    <input name="email" value="<?php echo(isset($usuario) ? $usuario->email : set_value('email'));?>" type="email" class="form-control" placeholder="E-mail">
                                                    <?php echo form_error('email', '<div class="text-danger">', '</div>')?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 mb-5">
                                                    <label for="exampleInputEmail1">Peril de Acesso</label>
                                                    <select name="user_group" class="form-control">
                                                        <?php if(isset($usuario)):?>
                                                        <option value="1"<?php echo($perfil_usuario->id == 1 ? 'selected' : '')?>>Atendente</option>
                                                        <option value="2"<?php echo($perfil_usuario->id == 2 ? 'selected' : '')?>>Administrador</option>
                                                        <?php endif;?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <label for="exampleInputEmail1">Status</label>
                                                    <select name="active" class="form-control">
                                                        <?php if(isset($usuario)):?>
                                                        <option value="1" <?php echo($usuario->active == 1 ? 'selected' :'')?>>Ativo</option>
                                                        <option value="0" <?php echo($usuario->active == 0 ? 'selected' :'')?>>Inativo</option>
                                                        <?php endif;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 mb-5">
                                                    <label>Senha</label>
                                                    <input name="password" type="password" class="form-control" placeholder="Senha">
                                                    <?php echo form_error('password', '<div class="text-danger">', '</div>')?>
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <label for="exampleInputConfirmPassword1">Confimação de Senha</label>
                                                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confimação de Senha">
                                                    <?php echo form_error('password_confirmation', '<div class="text-danger">', '</div>')?>
                                                </div>
                                            </div>
                                            <?php if(isset($usuario)): ?>
                                            <div class="form-group row">
                                                <div class="col-md-12">    
                                                    <input type="hidden" name="user_id" value="<?php echo $usuario->id ?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <button type="submit" class="btn btn-primary mr-2">Salvar</button>
                                            <button class="btn btn-light">Voltar</button>
                                          </form>
                                    </div>
                                </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <footer class = "footer">
    <div    class = "w-100 clearfix">
    <span   class = "text-center text-sm-left d-md-inline-block">Copyright © 2022 ThemeKit v2.0. All Rights Reserved.</span>
    <span   class = "float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado por</i> <a href = "" class = "text-dark" target = "_blank">Marcelo</a></span>
</div>
</footer>
                
</div>
<?php $this->load->view('templates/footer');?>