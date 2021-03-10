

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