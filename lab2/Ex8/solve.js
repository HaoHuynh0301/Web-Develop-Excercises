var flag = true;

function display(num) {
    var test_display = document.getElementById("txt_result");
    if(flag == true) {
        test_display.value = test_display.value + num;
    }
    else {
        test_display.value = "";
        test_display.value = test_display.value + num;
        flag = true;
    }
}

function clear_all() {
    var test_display = document.getElementById("txt_result");
    test_display.value = "";
    console.log("Done");
}

function solve() {
    flag = false;
    var test_display = document.getElementById("txt_result");
    try {
        var result = eval(test_display.value);
        test_display.value = result;
    }
    catch(exception) {
        test_display.value = "";
        alert(exception);
    }
}