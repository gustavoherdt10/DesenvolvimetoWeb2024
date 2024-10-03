function calcular(operacao) {
    var num1 = parseFloat(document.getElementById('numero1').value);
    var num2 = parseFloat(document.getElementById('numero2').value);
    var resultado = 0;

    if (isNaN(num1) || isNaN(num2)) {
        alert('Por favor, insira números válidos.');
        return;
    }

    switch (operacao) {
        case '+':
            resultado = num1 + num2;
            break;
        case '-':
            resultado = num1 - num2;
            break;
        case '*':
            resultado = num1 * num2;
            break;
        case '/':
            if (num2 === 0) {
                alert('Divisão por zero não é permitida.');
                return;
            }
            resultado = num1 / num2;
            break;
        default:
            alert('Operação inválida.');
            return;
    }

    var campoResultado = document.getElementById('resultado');
    campoResultado.innerText = 'Resultado: ' + resultado;

    if (resultado > 0) {
        campoResultado.style.backgroundColor = 'green';
        campoResultado.style.color = 'white';
    } else if (resultado < 0) {
        campoResultado.style.backgroundColor = 'red';
        campoResultado.style.color = 'white';
    } else {
        campoResultado.style.backgroundColor = 'gray';
        campoResultado.style.color = 'white';
    }
}
