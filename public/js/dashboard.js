document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("GraficoDinamico").getContext("2d");
    var dados = JSON.parse(document.getElementById("dados-graficos").textContent);

    var selectTipoTabela = document.getElementById("tipoTabela");
    var selectfiltroGrafico = document.getElementById("filtroGrafico");

    // Opções de gráfico para cada tipo de tabela
    var opcoesGraficos = {
        medidas: [
            { value: "nivel_risco", text: "Nível de Risco" },
            { value: "situacao", text: "Situação" },
            { value: "por_ano", text: "Ano de Início" }
        ],
        assistidas: [
            { value: "municipio", text: "Município" }
        ],
        agressores: [
            { value: "municipio", text: "Município" }
        ]
    };

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

    function atualizarGrafico() {
        var tipoTabela = selectTipoTabela.value;
        var filtroGrafico = selectfiltroGrafico.value;

        if (dados[tipoTabela] && dados[tipoTabela][filtroGrafico]) {
            var labels = dados[tipoTabela][filtroGrafico].labels;
            var values = dados[tipoTabela][filtroGrafico].values;

            grafico.destroy();
            grafico = criarGrafico(labels, values);
        }
    }

    function atualizarOpcoesGrafico() {
        var tipoTabela = selectTipoTabela.value;
        selectfiltroGrafico.innerHTML = ""; // Limpa as opções

        if (opcoesGraficos[tipoTabela]) {
            opcoesGraficos[tipoTabela].forEach(function (opcao) {
                var optionElement = document.createElement("option");
                optionElement.value = opcao.value;
                optionElement.textContent = opcao.text;
                selectfiltroGrafico.appendChild(optionElement);
            });
        }

        atualizarGrafico(); // Atualiza o gráfico com a nova seleção
    }

    // Inicializa o gráfico com os dados padrão (Medidas -> Nível de Risco)
    var grafico = criarGrafico(dados.medidas.nivel_risco.labels, dados.medidas.nivel_risco.values);

    // Event Listeners para mudanças nos selects
    selectTipoTabela.addEventListener("change", atualizarOpcoesGrafico);
    selectfiltroGrafico.addEventListener("change", atualizarGrafico);

    // Chamar ao carregar para garantir que o select certo esteja atualizado
    atualizarOpcoesGrafico();
});
