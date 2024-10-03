function adicionarLinhaMedia() {
    var tabela = document.getElementById("tabelaNotas");
    var linhas = tabela.getElementsByTagName("tr");
    var totalAlunos = linhas.length - 2;

    var novaLinha = tabela.insertRow();

    var celulaNome = novaLinha.insertCell(0);
    celulaNome.innerHTML = "<b>Média</b>";

    for (var col = 1; col < 10; col++) {
        var soma = 0;
        var contador = 0;

        for (var i = 2; i < linhas.length - 1; i++) {
            var celula = linhas[i].getElementsByTagName("td")[col];
            var nota = parseFloat(celula.innerText);
            if (!isNaN(nota)) {
                soma += nota;
                contador++;
            }
        }

        var media = soma / contador;
        var novaCelula = novaLinha.insertCell(col);
        novaCelula.innerHTML = media.toFixed(2);
    }
}

function adicionarColunaMedia() {
    var tabela = document.getElementById("tabelaNotas");
    var linhas = tabela.getElementsByTagName("tr");

    var header = linhas[0].insertCell(-1);
    header.setAttribute('rowspan', '2');
    header.innerHTML = "<b>Média</b>";

    for (var i = 2; i < linhas.length; i++) {
        var soma = 0;
        var contador = 0;
        var celulas = linhas[i].getElementsByTagName("td");

        for (var j = 1; j < celulas.length; j++) {
            var nota = parseFloat(celulas[j].innerText);
            if (!isNaN(nota)) {
                soma += nota;
                contador++;
            }
        }

        var media = soma / contador;
        var novaCelula = linhas[i].insertCell(-1);
        novaCelula.innerHTML = media.toFixed(2);
    }
}
