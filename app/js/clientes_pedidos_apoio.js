$(document).ready(function () {
    $.ajax({
        url: 'php/get_cliente_pedidos.php',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            var total_pedidos = 0;
            for (pedido of data) {
                switch (pedido.tipo) {
                    case "1":
                        document.getElementById("num_pedidos_instalacao").innerHTML = pedido.num_pedidos;
                        total_pedidos += parseInt(pedido.num_pedidos);
                        break;
                    case "2":
                        document.getElementById("num_pedidos_manutencao").innerHTML = pedido.num_pedidos;
                        total_pedidos += parseInt(pedido.num_pedidos);
                        break;
                    case "3":
                        document.getElementById("num_pedidos_desativacao").innerHTML = pedido.num_pedidos;
                        total_pedidos += parseInt(pedido.num_pedidos);
                        break;
                    case "4":
                        document.getElementById("num_pedidos_reclamacao").innerHTML = pedido.num_pedidos;
                        total_pedidos += parseInt(pedido.num_pedidos);
                        break;
                    case "5":
                        document.getElementById("num_pedidos_informacao").innerHTML = pedido.num_pedidos;
                        total_pedidos += parseInt(pedido.num_pedidos);
                        break;
                    default:
                        console.log("Tipo de Pedido Não Existente");
                }
            }

            document.getElementById("num_pedidos_total").innerHTML = total_pedidos;
        },
        error: function (xhr, status, error) {
            console.log("xhr: " + xhr + "\nstatus: " + status + "\nerror: " + error);
        }
    });
});