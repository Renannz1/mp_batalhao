window.addEventListener('DOMContentLoaded', event => {
    // Seleciona a tabela pelo ID
    const datatablesSimple = document.getElementById('datatablesSimple');

    // Verifica se a tabela existe antes de inicializar o DataTable
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple, {
            labels: {
                placeholder: "Buscar...",
                perPage: "registros por página",
                noRows: "Nenhum registro encontrado.",
                info: "Mostrando {start} a {end} de {rows} registros",
                noResults: "Nenhum resultado encontrado",
                perPageSelect: ["10", "25", "50", "100"] 
            }
        });
    }
});
