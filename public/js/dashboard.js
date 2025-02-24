// gráfico nivel de risco das medidas 
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("GraficoDinamico").getContext("2d");
    var dados = JSON.parse(document.getElementById("dados-graficos").textContent);
    
    var filtroTipo = document.getElementById("tipoGrafico");
    var filtroAno = document.getElementById("filtroAno");
    var filtroAnoContainer = document.getElementById("filtroAnoContainer");

    // Criar função para desenhar o gráfico
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

    // Criar o gráfico inicial (começa com "Nível de Risco")
    var grafico = criarGrafico(dados.nivel_risco.labels, dados.nivel_risco.values);

    // Atualizar gráfico ao mudar o filtro
    filtroTipo.addEventListener("change", function () {
        var tipoSelecionado = this.value;

        if (tipoSelecionado === "por_mes") {
            filtroAnoContainer.style.display = "block"; // Mostrar seletor de ano
            atualizarGraficoPorMes(filtroAno.value);
        } else {
            filtroAnoContainer.style.display = "none"; // Esconder seletor de ano
            atualizarGrafico(dados[tipoSelecionado].labels, dados[tipoSelecionado].values);
        }
    });

    // Atualizar gráfico ao mudar o ano (somente para "Medidas por Mês")
    filtroAno.addEventListener("change", function () {
        atualizarGraficoPorMes(this.value);
    });

    // Função para atualizar o gráfico
    function atualizarGrafico(labels, values) {
        grafico.destroy();
        grafico = criarGrafico(labels, values);
    }

    // Função para atualizar gráfico por mês do ano selecionado
    function atualizarGraficoPorMes(anoSelecionado) {
        var dadosAno = dados.por_mes[anoSelecionado] || {};
        var labels = Object.keys(dadosAno);
        var values = Object.values(dadosAno);
        atualizarGrafico(labels, values);
    }
});
