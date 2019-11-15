$(document).ready(function(){
    // Botão de login
    $('#login').on("click", function() {
        $.ajax({
            type: "POST",
            url: "php/login.php",
            data: {"utilizador": $('#utilizador').val(), "password": $('#password').val()},
            dataType: 'json',
            cache: false,
            success: function (data) {
                //var json = JSON.parse(data);
                if(data.erro){
                    $("#msgErro").html("Utilizador ou Password Inválidos").show();
                    $("#msgErro").css({"color": "red"});
                } else {
                    location.href = data.pagina;
                }
            }
        });
    });

});