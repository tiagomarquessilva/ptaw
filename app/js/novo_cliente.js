$(document).ready(function () {
    $("#mailForm").submit(function (e) {
        e.preventDefault();
    });
});
$("#mailForm").validate({
    rules: {
        company: {
            required: true
        },
        nif: {
            required: true,
            digits: true,
            minlength: 9,
            maxlength: 9
        },
        number: {
            required: true,
            digits: true,
            minlength: 9,
            maxlength: 9
        },
        email: {
            required: true,
        },
        email_admin: {
            required: true,
        },
        address: {
            required: true,
        },
        codPostal: {
            required: true,
        }
    },
    submitHandler: function (form) {
        sendData();
    },
});

function sendData() {
    var company = $("#company").val();
    var nif = $("#nif").val();
    var number = $("#number").val();
    var email = $("#email").val();
    var email_admin = $("#email_admin").val();
    var address = $("#address").val();
    var codPostal = $("#codPostal").val();

    $.ajax({
        type: "POST",
        url: "php/db_novo_cliente.php",
        data: {
            company: company,
            email: email,
            email_admin: email_admin,
            nif: nif,
            number: number,
            address: address,
            codPostal: codPostal
        },
        success: function (data) {
            if (data == 1) {
                toastr["success"]("Criado com sucesso!", "Utilizador")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "onHidden": function () {
                        window.location.reload();
                    }
                }


                toastr["success"]("Enviado com sucesso!", "Email")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            } else {
                toastr["error"]("Utilizador não criado!", "Utilizador")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }

                toastr["error"]("Não enviado!", "Email")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            }
        },
        error: function (data) {
            alert(data);
        }
    });
}
