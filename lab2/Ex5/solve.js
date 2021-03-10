

function clear_all() {
    txt_name = document.getElementById('txt_name');
    email = document.getElementById("txt_email");
    birthday = document.getElementById("txt_birthday");
    andress = document.getElementById("txt_address");
    city = document.getElementById("txt_city");
    zipcode = document.getElementById("txt_zip_code");

    rd_male = document.getElementById("rd_male").checked = false;
    rd_female = document.getElementById("rd_female").checked = false;

    zipcode.value = " "
    txt_name.value = " ";
    email.value = " ";
    birthday.value = " ";
    andress.value = " ";
    city.value = " ";
}

function solve() {
    var txt_name = document.getElementById('txt_name');
    var email = document.getElementById("txt_email");
    var birthday = document.getElementById("txt_birthday");
    var andress = document.getElementById("txt_address");
    var city = document.getElementById("txt_city");
    var zipcode = document.getElementById("txt_zip_code");
    var rd_male = document.getElementById("rd_male");
    var rd_female = document.getElementById("rd_female");
    var Flag = true;
    var list_eles = document.getElementsByTagName("input");
    for(var i = 0; i < list_eles.length; i++) {
        if(list_eles[i].value == "") {
            list_eles[i].placeholder = "Error"
            Flag = false;
        }
    }

    if(rd_male.checked == false && rd_female.checked == false) Flag = false;

    if(Flag == true) {
        var Flag_email = ValidateEmail(email.value);
        if(Flag_email) {
            var Flag_bd = isValidDate(birthday.value);
            if(Flag_bd) {
                if(zipcode.value.length >= 5) {
                    alert("[ZIPCODE]: Error");
                }
                else alert("Information Currectly");
            }
            else {
                alert("[BIRHTDAY]: Error");
            }
        }
        else alert("[Email]: Error");
    }
    else {
        alert("[Invalids]: Error");
    }
}

function ValidateEmail(mail) {
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
    {
        return (true)
    }
        return (false)
}

// Validates that the input string is a valid date formatted as "mm/dd/yyyy"
function isValidDate(dateString)
{
    // First check for the pattern
    if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
        return false;

    // Parse the date parts to integers
    var parts = dateString.split("/");
    var day = parseInt(parts[1], 10);
    var month = parseInt(parts[0], 10);
    var year = parseInt(parts[2], 10);

    // Check the ranges of month and year
    if(year < 1000 || year > 3000 || month == 0 || month > 12)
        return false;

    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

    // Adjust for leap years
    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
        monthLength[1] = 29;

    // Check the range of the day
    return true;
};