function solve() {
    var a, b, c;
    a = document.getElementById("a").value;
    b = document.getElementById("b").value;
    c = document.getElementById("c").value;
    if(a == "") {
        document.getElementById("noti_a").innerText = "A phải khác 0!";
    }
    else if (b == "") {
        document.getElementById("noti_b").innerText = "B phải khác 0!";
    }
    else if (c == "") {
        document.getElementById("noti_c").innerText = "C phải khác 0!";
    }
    else {
        if(a == 0) {
            if(b == 0) {
                if (c == 0) {
                    document.getElementById("noti_2").show = "Phương trình vô số nghiệm"
                     
                } else {
                    document.getElementById("noti_2").innerText = "Phương trình vô nghiệm"
                }
            } else {
                document.getElementById("noti_2").innerText = "Phương trình có nghiệm duy nhất"+(-c/b)
            }
        } else {
            var delta = b*b - 4*a*c;
            if(delta > 0) {
                var x1 = (-b+Math.sqrt(delta))/(2*a);
                var x2 = (-b-Math.sqrt(delta))/(2*a);
                document.getElementById("delta").innerHTML = delta;
                document.getElementById("noti_2").innerHTML = "Phương trình có 2 nghiệm phân biệt";
                document.getElementById("x1").innerHTML = x1;
                document.getElementById("x2").innerHTML = x2;
            } else if ( delta == 0) {
                var sum = -b/2*a
                document.getElementById("noti_2").innerText = "Phương trình có 2 nghiệm";
                document.getElementById("x1").innerText = sum;
                document.getElementById("x2").innerText = sum;
                
            } else {
                document.getElementById('noti_2').innerText = "Phuong trinhf vo nghiem";
            }
        }
    }
 
}