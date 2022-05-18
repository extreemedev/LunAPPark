
//var pn="";
function valida() {
    var b = true;
    var x = document.getElementsByClassName("form-control");
    for(var i=0; i < x.length; i++){
        //window.alert(x[i]);
        if (x[i].style.boxShadow!="") {
            x[i].style.boxShadow="";
            x[i].setAttribute("placeholder",Array[i]);
        }
    }
    if (document.myRegistr.nome.value=="") {
        var nome = document.getElementsByName("nome");
        for(var i=0; i < nome.length; i++){
            //if (!nome[i].hasAttribute("box-shadow")) {
                //window.alert("ao no")
                Array[0]=nome[i].getAttribute("placeholder");
                nome[i].setAttribute("placeholder","Inserire un nome");
                //nome[i].setAttribute("border","10px");
                //var classe=nome[i].getAttribute("class");
                //window.alert("ao quasi")
                //window.alert(classe)
                nome[i].style.boxShadow="0 0 0 0.25rem #e400007a";
                //classe.setAttribute("box-shadow","0 0 0 0.25rem #ffc4657a");
            //}
            //if (nome[i].style.boxShadow!="") {
            //    window.alert("ao si")
            //}
        }
        //document.getElementsByName("nome").setAttribute("border-color","#ffc465");
        //document.myRegistr.nome.setAttribute("size","100");
        //window.alert("Inserire nome");

        b = false;
    }

    if (document.myRegistr.cognome.value=="") {
        var cognome = document.getElementsByName("cognome");
        for(var i=0; i < cognome.length; i++){
            Array[1]=cognome[i].getAttribute("placeholder");
            cognome[i].setAttribute("placeholder","Inserire un cognome");
            cognome[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    }

    if (document.myRegistr.email.value=="") {
        var email = document.getElementsByName("email");
        for(var i=0; i < email.length; i++){
            Array[1]=cognome[i].getAttribute("placeholder");
            cognome[i].setAttribute("placeholder","Inserire un cognome");
            cognome[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    }

    if (document.myRegistr.confermaemail.value=="") {
        var cognome = document.getElementsByName("cognome");
        for(var i=0; i < cognome.length; i++){
            Array[1]=cognome[i].getAttribute("placeholder");
            cognome[i].setAttribute("placeholder","Inserire un cognome");
            cognome[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    }

    if (document.myRegistr.password.value=="") {
        var cognome = document.getElementsByName("cognome");
        for(var i=0; i < cognome.length; i++){
            Array[1]=cognome[i].getAttribute("placeholder");
            cognome[i].setAttribute("placeholder","Inserire un cognome");
            cognome[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    }

    if (document.myRegistr.confermapassword.value=="") {
        var cognome = document.getElementsByName("cognome");
        for(var i=0; i < cognome.length; i++){
            Array[1]=cognome[i].getAttribute("placeholder");
            cognome[i].setAttribute("placeholder","Inserire un cognome");
            cognome[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    }

    if (document.myRegistr.tel.value=="") {
        var cognome = document.getElementsByName("cognome");
        for(var i=0; i < cognome.length; i++){
            Array[1]=cognome[i].getAttribute("placeholder");
            cognome[i].setAttribute("placeholder","Inserire un cognome");
            cognome[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    }

    if (document.myRegistr.data.value=="") {
        var cognome = document.getElementsByName("cognome");
        for(var i=0; i < cognome.length; i++){
            Array[1]=cognome[i].getAttribute("placeholder");
            cognome[i].setAttribute("placeholder","Inserire un cognome");
            cognome[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    }


    //if ((document.myRegistr.email.value=="")&&(document.myRegistr.tel.value=="")) {
      //  window.alert("Inserire o l’email o il numero di telefono");
        //return false;
    //}
    if (b==false){
        //window.alert("Dati non inseriti correttamente");
        return false;
    }
    window.alert("Dati inseriti correttamente");
    return true;
}