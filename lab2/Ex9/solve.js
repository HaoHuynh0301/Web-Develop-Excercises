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

            }
        }
    }
}

function validateSelectBox(obj) {
    var table = document.getElementById('table');
    var list_btn = document.getElementsByTagName('input');
    var body = document.getElementById('body');
    var test_display = document.getElementById("txt_result");
    var options = obj.children;
    for (var i=0; i<options.length; i++) {
        if(options[i].selected) {
            if(i == 0) {
                body.classList.remove('body_dark');
                body.classList.remove('body_colorfull');
                body.classList.add('body_default');
                
                table.classList.remove('table_dark');
                table.classList.add('table_default');
                
                test_display.classList.remove('text_dark');
                test_display.classList.remove('text_colorful');
                test_display.classList.add('text_default');
                for(var y=0; y<list_btn.length; y++) {
                    list_btn[y].classList.remove('Dark');
                    list_btn[y].classList.remove('Colorful');
                    list_btn[y].classList.add('Default')
                }
            } else if (i == 1) {
                body.classList.remove('body_default');
                body.classList.remove('body_colorfull');
                body.classList.add('body_dark');

                table.classList.remove('table_default');
                table.classList.add('table_dark');

                test_display.classList.remove('text_default');
                test_display.classList.remove('text_colorful');
                test_display.classList.add('text_dark');
                for(var y=0; y<list_btn.length; y++) {
                    list_btn[y].classList.remove('Colorful');
                    list_btn[y].classList.remove('Default')
                    list_btn[y].classList.add('Dark');
                }
            } else if (i == 2) {
                
            }
        }
    }
}