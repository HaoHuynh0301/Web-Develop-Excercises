var flag = true;
function display(num) {
    var test_display = document.getElementById("txt_result");
    test_display.value = test_display.value + num;
}

function clear_all() {
    var test_display = document.getElementById("txt_result");
    test_display.value = "";
    console.log("Done");
}

function solve() {
    console.log("Begin");
    var test_display = document.getElementById("txt_result");
    var result = eval(test_display.value);
    test_display.value = result;
    console.log(result);
}