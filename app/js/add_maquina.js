$(document).ready(function () {
    $("#maqForm").submit(function (e) {
        e.preventDefault();
    });
});
$("#maqForm").validate({
    rules: {
        morada: {
            required: true
        },
        codPostal: {
            required: true,
        },
        latitude: {
            required: true,
        },
        longitude: {
            required: true,
        },
        empresa:{
            required: false,
        }
    },
    submitHandler: function (form) {
        sendData();
    },
});

function sendData() {
    var morada = $("#morada").val();
    var codPostal = $("#codPostal").val();
    var latitude = $("#latitude").val();
    var longitude = $("#longitude").val();
    var empresa = $("#empresa").val();
    $.ajax({
        type: "POST",
        async: false,
        url: "php/add_maquina.php",
        data: {
            morada: morada,
            codPostal: codPostal,
            latitude: latitude,
            longitude: longitude,
            empresa: empresa
        },
        success: function (data) {
           window.location.reload();
        },
        error: function (data) {
           console.log("Erro: " + data);
        }
    });
}
