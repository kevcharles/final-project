function validateForm() {
    var x = document.forms["myForm"]["studentNumber"].value;
    var re = /^(A){1}\d{8}/i;
    if (x!="" && re.test(x) == false) {
        alert("Student Number must be in the format A12345678");
        return false;
    }
    else {
        return true;
    }
}