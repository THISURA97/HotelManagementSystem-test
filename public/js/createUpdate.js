function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
var password= document.getElementById("password"), conPass = document.getElementById("conPass");

function validatePassword(){
    var exp = /^(?=.*\d)(?=.[A-Z])(?!.*[^a-zA-Z0-9@#$^+=])(.{8,})$/;
    if(password.value !== conPass.value){
        conPass.setCustomValidity("Password does not match the confirm password. Please re-enter the confirm password.");
    }
    else{
        conPass.setCustomValidity('');
    }
}
function myFunction() {             //trybutton
    var x = document.getElementById("myFile");
    x.disabled = true;}


password.onchange = validatePassword;
conPass.onkeyup = validatePassword;