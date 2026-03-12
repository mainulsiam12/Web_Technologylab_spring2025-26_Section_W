function addValue(value){
    var display = document.getElementById("display");
    display.value = display.value + value;
}

function calculate(){
    var display = document.getElementById("display");

    try{
        display.value = eval(display.value);
    }
    catch{
        display.value = "Error";
    }
}

function clearDisplay(){
    document.getElementById("display").value = "";
}