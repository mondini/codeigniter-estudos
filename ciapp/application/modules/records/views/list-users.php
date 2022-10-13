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
                                        <i class="ik ik-users bg-blue"></i>
                                        <div class="d-inline">
                                            <h5><?php echo $titulo; ?></h5>
                                            <span><?php echo $subtitulo;?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a title="Home" href="<?php echo base_url('/');?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table data_table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Usuário</th>
                                                    <th>Email</th>
                                                    <th>Perfil</th>
                                                    <th>Status</th>
                                                    <th class="nosort text-right pr-25">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($usuarios as $user): ?>
                                                <tr>
                                                    <td><?php echo $user->id; ?></td>
                                                    <td><?php echo $user->first_name; ?></td>
                                                    <td><?php echo $user->username; ?></td>
                                                    <td><?php echo $user->email; ?></td>
                                                    <td><?php echo ($this->ion_auth->is_admin($user->id) ? 'Administrador' : 'Atendente') ?></td>
                                                    <td><?php echo $user->active == 1 ? 
                                                    '<span class="badge badge-pill badge-primary mb-1">Ativo</span>'
                                                    : 
                                                    '<span class="badge badge-pill badge-secondary mb-1">Inativo</span>'; ?></td>
                                                    <td class="text-right pr-25">
                                                        <a href="<?php echo base_url('/records/users/edit/'. $user->id); ?>"data-toggle="tooltip" data-placement="bottom" title="Editar" class="ik ik-edit f-16 mr-15 text-green" href=""></a>
                                                        <a data-toggle="tooltip" data-placement="bottom" title="Inativar" class="ik ik-trash-2 f-16 text-red" href=""></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>
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