var modal = $('.modal-content');
$('#btn_cadastro').click(function(){
    modal.show();
});

$(document).ready(function(){
    $.ajax({
        url: base_url + 'records/users/ajax_lista',
        method: 'GET',
        dataType: 'html',
        success: function(response){   
            //console.log(response[0].email);
           //$("#list-div").text(response[0].email);
           $("#list-div").text(response);
        }
      });
})