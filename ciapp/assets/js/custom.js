$(document).on("click", "#salva_form", function(e){
    e.preventDefault();
    var nome = $('#nome_form').val();
    var email = $('#email_form').val();
    var usuario = $('#usuario_form').val();
    var senha = $('#senha_form').val();
    var perfil = $('#grupo_form').val();
    if($("#form-users").valid() == true){
        $("#exampleModal").modal('toggle');
        $(".alerta").removeClass("hide");
        $(".alerta").addClass("show");
        $(".alerta").addClass("showAlerta");
        setTimeout(function(){
            $(".alerta").removeClass("show");
            $(".alerta").addClass("hide");
        }, 5000);
        $.ajax({
            url: base_url + 'records/users/add',
            method: 'POST',
            data: {name: nome, email: email, username: usuario, password: senha, user_group: perfil},
            dataType: 'json'
        }).done(function(result){
            console.log(result);
            getUsers();
        });
    }else{
        alert("Verifique o formulário!");
    }
});


//Lista os usuários
$(document).ready(function(){
    getUsers();
   $("#form-users").validate({
        rules: {
            nome:{
                required: true,
                minlength: 3
            },
            email:{
                required: true,
                email: true
            },
            usuario: {
                required: true,
                minlength: 3
            },
            grupo: {
                required: true,
                min: 1
            },
            senha: {
                required: true,
                minlength: 4
            },
            confirma_senha: {
                required: true,
                equalTo: "#senha_form"
            }
        },
        messages: {
            nome: {
                required: "Preciso que tenha!",
                minlength: jQuery.validator.format("É necessário ter ao menos {0} caracteres!")
            },
            email: {
                required: "Preciso que tenha!",
                email: "O campo deve ser um email!"
            },
            usuario: {
                required: "Preciso que tenha!",
                minlength: jQuery.validator.format("É necessário ter ao menos {0} caracteres!")
            },
            grupo: {
                min: "Selecione um Perfil de Acesso!"
            },
            senha: {
                required: "Preciso que tenha!",
                minlength: jQuery.validator.format("É necessário ter ao menos {0} caracteres!")
            },
            confirma_senha: {
                required: "Preciso que tenha!",
                equalTo: "A confirmação deve ser igual a senha!"
            }
        }
    });
});
function getUsers(){
    $.ajax({
        url: base_url + 'records/users/ajax_lista',
        method: 'GET',
        dataType: 'json',
        success: function(response){
            var len = response.length;
            for(var i=0; i < len; i++){
                var id = response[i].id;
                var first_name = response[i].first_name;
                var username = response[i].username;
                var email = response[i].email;
                if(response[i].user_id == 1){
                    var user_group = "Admin"
                }else{
                    var user_group = "Atendente";
                };
                if(response[i].active == 1){
                    var status = "Ativo";
                }else{
                    var status = "Inativo";
                };
                var tr_str = "<tr>" +
                "<td>" + id + "</td>" +
                "<td>" + first_name + "</td>" +
                "<td>" + username + "</td>" +
                "<td>" + email + "</td>" +
                "<td>" + user_group + "</td>" +
                "<td>" + status + "</td>" +
                "<td class='text-right' pr-25>"+
                "<a href='/records/users/edit/"+id+"' data-toggle='tooltip' data-placement='bottom' title='Editar' class='ik ik-edit f-16 mr-15 text-green'></a>"+
                "<a data-toggle='tooltip' data-placement='bottom' title='Inativar' class='ik ik-trash-2 f-16 text-red'></a>"+
                "</td>" +
                "</tr>";
                $(".table tbody").append(tr_str);
            }
            //$("td").append(response[0].id);
            //$("td").append(response[0].first_name);
        }
      });
    }