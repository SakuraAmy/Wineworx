function validateCert() {
   var checkBool = true;
    var x = document.forms["OrderGift"]["customerName"].value;
    if (x == null || x == "") {
        document.forms["OrderGift"]["customerName"].style.backgroundColor = 'lightblue';
        checkBool = false;
    }
    var y = document.forms["OrderGift"]["customerEmail"].value;
    if (y == null || y == "") {
        document.forms["OrderGift"]["customerEmail"].style.backgroundColor = 'lightblue';
        checkBool = false;
    }
    var z = document.forms["OrderGift"]["customerPhone"].value;
    if (z == null || z == "") {
        document.forms["OrderGift"]["customerPhone"].style.backgroundColor = 'lightblue';
        checkBool = false;
    }
    var zz = document.forms["OrderGift"]["customerPurchase"].value;
    if (zz == null || zz == "") {
        document.forms["OrderGift"]["customerPurchase"].style.backgroundColor = 'lightblue';
        checkBool = false;
    }
    var zz = document.forms["OrderGift"]["customerMailAddress"].value;
    if (zz == null || zz == "") {
        document.forms["OrderGift"]["customerMailAddress"].style.backgroundColor = 'lightblue';
        checkBool = false;
    }
    return checkBool;
}