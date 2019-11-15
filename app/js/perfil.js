$(document).ready(function () {
    getInformation();
    $("#perfilForm").submit(function (e) {
        e.preventDefault();
    });
});
$("#perfilForm").validate({
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
        updateInformation();
    },
});

function getInformation() {
    $.ajax({
        type: "POST",
        async: false,
        url: "php/perfil_information.php",
        data: {
            function: "getInformation",
        },
        success: function (data) {
            var perfil = JSON.parse(data);
            $("#company").val(perfil.name);
            $("#nif").val(perfil.nif);
            $("#contacto").val(perfil.number);
            $("#email").val(perfil.email);
            $("#address").val(perfil.address);
            $("#codPostal").val(perfil.cod_postal);
        },
        error: function () {
            alert('failure');
        }
    });
}

function updateInformation() {
    var company = $("#company").val();
    var nif = $("#nif").val();
    var number = $("#contacto").val();
    var email = $("#email").val();
    var address = $("#address").val();
    var codPostal = $("#codPostal").val();

    $.ajax({
        type: "POST",
        url: "php/perfil_information.php",
        data: {
            function: "updateInformation",
            company: company,
            nif: nif,
            number: number,
            email: email,
            address: address,
            codPostal: codPostal
        },
        success: function (data) {
            toastr["success"]("Atualizado com sucesso!!", "Perfil")

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

        },
        error: function () {
            alert('failure');
        }
    });
}
