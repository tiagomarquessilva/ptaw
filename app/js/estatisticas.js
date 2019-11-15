$(document). ready(function () {

    $.ajax({
        url: "php/distrito.php",
        type: "GET",
        dataType:"json",
        success: function(data){
            //var distritos = JSON.parse(data);
            var nomes = [];
            var numeros = [];
            data.forEach(element => {
                nomes.push(element.nome);
                numeros.push(element.count);
            });

            var ctxD = document.getElementById("nmaquinas").getContext('2d');
            var myLineChart = new Chart(ctxD, {
                type: 'horizontalBar',
                data: {
                   labels: nomes,
                    datasets: [{
                        label: ["Número de máquinas"],
                        data: numeros,
                        backgroundColor: ["#a3e1d4", "#a3e1d4","#a3e1d4", "#a3e1d4","#a3e1d4","#a3e1d4","#a3e1d4", "#a3e1d4","#a3e1d4","#a3e1d4","#a3e1d4", "#a3e1d4","#a3e1d4", "#a3e1d4","#a3e1d4","#a3e1d4","#a3e1d4", "#a3e1d4"],
                                                            }]
                },
                options: {
                    responsive: true
                }
            });

        }, error: function(data){
            console.log(data);
        }
    });


//     var ctxD = document.getElementById("mclientes").getContext('2d');
//     var myLineChart = new Chart(ctxD, {
//         type: 'doughnut',
//         data: {
//             labels: ["Empresa 1", "Empresa 2", "Empresa 3"],
//             datasets: [{
//                 data: [25, 8, 7],
//                 backgroundColor: ["#a3e1d4", "#dedede", "#b5b8cf"],
//                                                     }]
//         },
//         options: {
//             responsive: true
//         }
//     });

    var ctxD = document.getElementById("ncliente").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: ["Empresa 1", "Empresa 2", "Empresa 3"],
            datasets: [{
                data: [18, 28, 5],
                backgroundColor: ["#a3e1d4", "#dedede", "#b5b8cf"],
                                                    }]
        },
        options: {
            responsive: true
        }
    });
 });
