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

function changecss(obj) {
    var options = obj.children;
    var css_path = document.getElementById('css_path');
    for (var i=0; i<options.length; i++) {
        if(options[i].selected) {
            if(i == 0) {
                css_path.innerHTML = '<link type="text/css" rel="stylesheet" href="default.css" id="css_path"/>';
            } else if (i == 1) {
                css_path.innerHTML = '<link type="text/css" rel="stylesheet" href="dark.css" id="css_path"/>'
            } else if (i == 2) {
                css_path.innerHTML = '<link type="text/css" rel="stylesheet" href="colorful.css" id="css_path"/>'
            }
        }
    }
}
