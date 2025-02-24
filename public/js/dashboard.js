document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("GraficoDinamico").getContext("2d");
    var dados = JSON.parse(document.getElementById("dados-graficos").textContent);
    
    var filtroTipo = document.getElementById("tipoGrafico");

    function criarGrafico(labels, values) {
        return new Chart(ctx, {
            type: "bar",
            data: {
                labels: labels,
                datasets: [{
                    label: "Quantidade",
                    data: values,
                    backgroundColor: "#36A2EB",
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: "top",
                    },
                },
            },
        });
    }

    var grafico = criarGrafico(dados.nivel_risco.labels, dados.nivel_risco.values);

    filtroTipo.addEventListener("change", function () {
        var tipoSelecionado = this.value;
        atualizarGrafico(dados[tipoSelecionado].labels, dados[tipoSelecionado].values);
    });

    function atualizarGrafico(labels, values) {
        grafico.destroy();
        grafico = criarGrafico(labels, values);
    }
});
