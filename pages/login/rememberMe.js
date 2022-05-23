function validaForm() {
    myLoader();
    if (document.myForm.remember.checked) {
        window.alert("Hai scelto di ricordare le credenziali");
    }
    else {
        window.alert("Hai scelto di non ricordare le credenziali");
    }
}