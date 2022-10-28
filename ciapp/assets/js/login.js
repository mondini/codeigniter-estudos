$(document).ready(function(){
    $('#form-login').validate({
        rules: {
            user: {
                required: true
            },
            password:{
                required: true
            }
        },
        messages:{
            user:{
                required: 'Preencha o usuário!'
            },
            password: {
                required: 'Preencha a senha!'
            }
        }
    })
});
//Chama o AJAX para checar credenciais no DB
$('#submit-login').click(function(e){
    e.preventDefault(); 
    var usuario = $('#usuario-login').val();
    var senha = $('#senha-login').val();
    if($('#form-login').valid() == true){
        $.ajax({
            url: base_url + 'sessions/sessions/login',
            method: 'POST',
            dataType: 'html',
            data: {usuario: usuario, senha: senha},
            success: function(response){
                if(response == "logado"){
                    noty({text: 'JA TA LOGADO PAE', type: 'error'});
                    window.location.href = base_url;
                }else if(response == true){
                    noty({text: 'a', type: 'error'});
                    window.location.href = base_url + "records/users/lista";
                }else{
                    noty({text: 'Email ou senha incorretos!', type: 'error', timeout: '5000', progressBar: true});
                    $('#senha-login').val('');
                }
            }
        });
    }
})
function logout(){
    $.ajax({
        url: base_url + 'sessions/sessions/logout',
        dataType: 'html',
        success: function(response){
            if(response == true){
                alert('deslogado');
            }
        }
    })
}