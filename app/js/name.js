$('document').ready(function () {
    $.ajax({
        url: "php/name.php",
        type: 'GET',
        success: function (res) {
            data = JSON.parse(res);
            $("#cliente").html(data.name + " - Admin <b class=" + 'caret' + "></b>");
        }
    });
});