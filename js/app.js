let slider = document.getElementById("myRange");
let output = document.getElementById("value");

output.innerHTML = slider.value;

let bruto = "";
slider.oninput = function() {
    output.innerHTML = this.value;
    bruto = this.value;
}

let neto = document.getElementById("neto");
let isSubmitted = 5;
let brutoPercent = 70;


document.getElementById("submit").addEventListener("click", calculate);

function calculate() {

    const brutoAprekiniem = bruto;
    let neto = document.getElementById("neto");
    let isSubmitted = 5;
    let brutoPercent = 70;
    if (document.getElementById('yes').checked) {

        brutoPercent += isSubmitted;
    
    } 

    var result = (brutoPercent / 100) * brutoAprekiniem;
    var formatted = result.toFixed(2);
    neto.innerHTML = formatted + " EUR";


}
 


