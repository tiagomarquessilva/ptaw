$(document).ready(function () {
    $("#mailForm").submit(function (e) {
        e.preventDefault();
    });
});
$("#registerForm").validate({
    rules: {
        name: {
            required: true
        },
        email: {
            required: true,
        },
        phone: {
            required: true,
            digits: true,
            minlength: 9,
            maxlength: 9
        },
        nif: {
            required: true,
            digits: true,
            minlength: 9,
            maxlength: 9
        },
        address: {
            required: true,
        },
        codPostal: {
            required: true,
        },
        password: {
            required: true,
        }

    },
    submitHandler: function (form) {
        sendData();
    },
});

function sendData() {
    var urlParams = new URLSearchParams(location.search);
    var id = urlParams.get('id');
    var name = $("#name").val();
    var email = $("#email").val();
    var nif = $("#nif").val();
    var number = $("#phone").val();
    var address = $("#address").val();
    var codPostal = $("#codPostal").val();
    var password = $("#password").val();

    $.ajax({
        type: "POST",
        async: false,
        url: "php/db_registro.php",
        data: {
            name: name,
            email: email,
            nif: nif,
            number: number,
            address: address,
            codPostal: codPostal,
            password: password,
            id: id
        },
        success: function (data) {
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

        },
        error: function (data) {
            alert(data);
        }
    });
}
