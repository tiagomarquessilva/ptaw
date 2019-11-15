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
    var info;
    $.ajax({
        type: "POST",
        async: false,
        url: "php/perfil_information_administrador.php",
        data: {
            function: "getInformation",
        },
        success: function (data) {
            info = data;
            var ArrInfo = info.split(",");
            $("#company").val(ArrInfo[3]);
            $("#nif").val(ArrInfo[7]);
            $("#contacto").val(ArrInfo[4]);
            $("#email").val(ArrInfo[1]);
            $("#address").val(ArrInfo[5]);
            $("#codPostal").val(ArrInfo[6]);

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
        url: "php/perfil_information_administrador.php",
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
