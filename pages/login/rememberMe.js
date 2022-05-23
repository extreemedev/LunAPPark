function validaForm() {
    myLoader();
    if (document.myForm.remember.checked) {
        window.alert("Hai scelto di ricordare le credenziali");
        document.cookie="rem=true";
        document.cookie="email="+document.myForm.inputEmail.value;
        document.cookie="pas="+document.myForm.inputPassword.value;
    }
    else {
        window.alert("Hai scelto di non ricordare le credenziali");
        document.cookie="rem=false";
    }
}