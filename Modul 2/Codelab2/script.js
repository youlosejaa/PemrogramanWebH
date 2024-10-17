function calculateSum() {
    var num1 = parseFloat(document.getElementById('firstNumber').value);
    var num2 = parseFloat(document.getElementById('secondNumber').value);
    var sum = num1 + num2;

    if (!isNaN(sum)) {
        document.getElementById('result').innerHTML = "Hasil: " + sum;
    } else {
        document.getElementById('result').innerHTML = "Hasil: Silakan masukkan angka yang valid";
    }
}

function resetCalculator() {
    document.getElementById('firstNumber').value = "";
    document.getElementById('secondNumber').value = "";
    document.getElementById('result').innerHTML = "Hasil: ";
}
