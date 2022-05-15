function valida() {
    if (document.myRegistr.cognome.value=="") {
        window.alert("Inserire cognome");
        return false;
    }

    if (document.myRegistr.nome.value=="") {
        window.alert("Inserire nome");
        return false;
    }

    //if (document.myRegistr.matricola.value=="") {
     // windows.alert("Inserire matricola");
    //  return false;
   // }

    //var v=parseInt(document.myRegistr.matricola.value);
    //if (isNaN(v)) {
    //  windows.alert("La matricola deve essere un numero");
    //  return false;
   // }

   // if (document.myRegistr.regione.value=="nessuna") {
    //  windows.alert("Selezionare una regione");
    //  return false;
   // }

    if ((document.myRegistr.email.value=="")&&(document.myRegistr.tel.value=="")) {
        window.alert("Inserire o l’email o il numero di telefono");
        return false;
    }
    window.alert("Dati inseriti correttamente");
    return true;
}