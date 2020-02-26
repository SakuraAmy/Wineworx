function jsfunct1() {
    var clicked1 = document.getElementById("wine");
    if (clicked1.checked == true) {
        document.getElementById("numOfWine").style.display = "block";
    }
    else {
        document.getElementById("numOfWine").style.display = "none";
    }
}

function jsfunct2() {
    var clicked2 = document.getElementById("juice");
    if (clicked2.checked == true) {
        document.getElementById("numOfJuice").style.display = "block";
    }
    else {
        document.getElementById("numOfJuice").style.display = "none";
    }
}

 
function validateForm() {
   var checkBool = true;
    var x = document.forms["OrderForm"]["firstCustomerName"].value;
    if (x == null || x == "") {
        document.forms["OrderForm"]["firstCustomerName"].style.backgroundColor = 'lightblue';
        checkBool = false;
    }
    var y = document.forms["OrderForm"]["lastCustomerName"].value;
    if (y == null || y == "") {
        document.forms["OrderForm"]["lastCustomerName"].style.backgroundColor = 'lightblue';
        checkBool = false;
    }
    var z = document.forms["OrderForm"]["customerEmail"].value;
    if (z == null || z == "") {
        document.forms["OrderForm"]["customerEmail"].style.backgroundColor = 'lightblue';
        checkBool = false;
    }
    var zz = document.forms["OrderForm"]["customerPhone"].value;
    if (zz == null || zz == "") {
        document.forms["OrderForm"]["customerPhone"].style.backgroundColor = 'lightblue';
        checkBool = false;
    }
    
    return checkBool;
    
    
}