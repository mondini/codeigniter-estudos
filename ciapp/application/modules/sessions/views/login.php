<?php $this->load->view('templates/header');?>
    <body>
        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('<?php echo base_url('assets/img/auth/login-bg.jpg');?>')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a><img onclick="logout();" src="<?php echo base_url('assets/src/img/brand.svg');?>" alt=""></a>
                            </div>
                            <h3>Login no ThemeKit</h3>
                            <p>Feliz em te ver novamente, seu merda!</p>
                            <form id="form-login">
                                <div class="form-group">
                                    <input type="text" id="usuario-login" name="user" class="form-control" placeholder="Email">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="senha-login" name="password" class="form-control" placeholder="Senha">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;Lembrar credenciais</span>
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <a href="forgot-password.html">Esqueceu a Senha?</a>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button id="submit-login" class="btn btn-theme">Entrar</button>
                                </div>
                            </form>
                            <div class="register">
                                <p>Não tem uma conta?<a href="register.html"> Criar uma conta</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php $this->load->view('templates/footer');?>
