<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/navbar');?>

<div class = "page-wrap">
    <?php $this->load->view('templates/sidebar'); ?>
                
    <div class="main-content">
        <!-- Mensagem de sucesso -->
        <div class="alerta hide text-center alert bg-success alert-success text-white" role="alert">
            Cadastro realizado com sucesso!
        </div>
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
                                        <table id="tabela-data" class="table data_table">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Cadastrar
                                        </button>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Usu??rio</th>
                                                    <th>Email</th>
                                                    <th>Perfil</th>
                                                    <th>Status</th>
                                                    <th class="nosort text-right pr-25">A????es</th>
                                                </tr>
                                            </thead>
                                            <tbody>
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
    <span   class = "text-center text-sm-left d-md-inline-block">Copyright ?? 2022 ThemeKit v2.0. All Rights Reserved.</span>
    <span   class = "float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado por</i> <a href = "" class = "text-dark" target = "_blank">Marcelo</a></span>
</div>
</footer>
                
</div>
<?php $this->load->view('templates/footer');?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de usu??rios</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-users" method="POST">
            <div class="form-group row d-flex justify-content-center">
                <div class="form-content col-md-6 mb-5 ">
                    <label for="">Nome</label>
                    <input type="text" id="nome_form" name="nome" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="form-content col-md-6 mb-5">
                    <label for="">Email</label>
                    <input type="email" id="email_form" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="form-content col-md-6 mb-5">
                    <label for="">Usuario</label>
                    <input type="text" id="usuario_form" name="usuario" class="form-control" placeholder="Usuario">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="form-content col-md-6 mb-5">
                    <label for="">Perfil de Acesso</label>
                    <select id="grupo_form" name="grupo" class="form-control" placeholder="Perfil">
                        <option value="0">Selecione o perfil</option>    
                        <option value="1">Admin</option>
                        <option value="2">Atendente</option>
                    </select>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="form-content col-md-6 mb-5">
                    <label for="">Senha</label>
                    <input type="password" id="senha_form" name="senha" class="form-control" placeholder="Senha">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="form-content col-md-6 mb-5">
                    <label for="">Confirma????o de Senha</label>
                    <input type="password" id="confirma_senha_form" name="confirma_senha" class="form-control" placeholder="Confirma????o de Senha">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        <button type="button" id="salva_form" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>