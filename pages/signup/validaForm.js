
function validaForm() {
    var b = true;
    var b2 = true;
    var x = document.getElementsByClassName("form-control");
    for(var i=0; i < x.length; i++){
        //window.alert(x[i]);
        if (x[i].style.boxShadow!="") {
            x[i].style.boxShadow="";
            if (x[i] != document.myRegistr.data) {
                x[i].setAttribute("placeholder",Array[i]);
            }
        }
    }

//#########################################################################################################################################

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

//#########################################################################################################################################

    if (document.myRegistr.cognome.value=="") {
        var cognome = document.getElementsByName("cognome");
        for(var i=0; i < cognome.length; i++){
            Array[1]=cognome[i].getAttribute("placeholder");
            cognome[i].setAttribute("placeholder","Inserire un cognome");
            cognome[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    }

//#########################################################################################################################################

    if (document.myRegistr.email.value=="") {
        var email = document.getElementsByName("email");
        for(var i=0; i < email.length; i++){
            Array[2]=email[i].getAttribute("placeholder");
            email[i].setAttribute("placeholder","Inserire un email");
            email[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    } else {
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.myRegistr.email.value))){
            window.alert("L'indirizzo email che hai inserito non e' valido")
            b2=false;
            var email = document.getElementsByName("email");
            for(var i=0; i < email.length; i++){
                Array[2]=email[i].getAttribute("placeholder");
                email[i].style.boxShadow="0 0 0 0.25rem #e400007a";
            }
            b = false;
        }
    }

//#########################################################################################################################################

    if (((document.myRegistr.confermaemail.value=="") && (document.myRegistr.email.value=="")) || (b2==false)) {
        var confermaemail = document.getElementsByName("confermaemail");
        for(var i=0; i < confermaemail.length; i++){
            Array[3]=confermaemail[i].getAttribute("placeholder");
            confermaemail[i].setAttribute("placeholder","Inserire un email");
            confermaemail[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    } else {
        if (document.myRegistr.confermaemail.value!=document.myRegistr.email.value) {
            window.alert("inserire lo stesso indirizzo email!")
            var confermaemail = document.getElementsByName("confermaemail");
            for(var i=0; i < confermaemail.length; i++){
                Array[3]=confermaemail[i].getAttribute("placeholder");
                confermaemail[i].setAttribute("placeholder","Inserire un email");
                confermaemail[i].style.boxShadow="0 0 0 0.25rem #e400007a";
            }
            b = false;
        }
    }

//#########################################################################################################################################

    if (document.myRegistr.password.value=="") {
        var password = document.getElementsByName("password");
        for(var i=0; i < password.length; i++){
            Array[4]=password[i].getAttribute("placeholder");
            password[i].setAttribute("placeholder","Inserire una password");
            password[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    }

//#########################################################################################################################################

    if ((document.myRegistr.confermapassword.value=="") && (document.myRegistr.password.value=="")) {
        var confermapassword = document.getElementsByName("confermapassword");
        for(var i=0; i < confermapassword.length; i++){
            Array[5]=confermapassword[i].getAttribute("placeholder");
            confermapassword[i].setAttribute("placeholder","Inserire una password");
            confermapassword[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    } else {
        if (document.myRegistr.confermapassword.value!=document.myRegistr.password.value) {
            window.alert("inserire la stessa password!")
            var confermapassword = document.getElementsByName("confermapassword");
            for(var i=0; i < confermapassword.length; i++){
                Array[5]=confermapassword[i].getAttribute("placeholder");
                confermapassword[i].setAttribute("placeholder","Inserire una password");
                confermapassword[i].style.boxShadow="0 0 0 0.25rem #e400007a";
            }
            b = false;
        }
    }

//#########################################################################################################################################

    if (document.myRegistr.tel.value=="") {
        var tel = document.getElementsByName("tel");
        for(var i=0; i < tel.length; i++){
            Array[6]=tel[i].getAttribute("placeholder");
            tel[i].setAttribute("placeholder","Inserire un telefono");
            tel[i].style.boxShadow="0 0 0 0.25rem #e400007a";
        }
        b = false;
    } else {
        if ((document.myRegistr.tel.value.length<10) || (document.myRegistr.tel.value.length>12)) {
            window.alert("inserire un numero tra 10 e 12 cifre")
            var tel = document.getElementsByName("tel");
            for(var i=0; i < tel.length; i++){
                Array[6]=tel[i].getAttribute("placeholder");
                tel[i].setAttribute("placeholder","Inserire un telefono");
                tel[i].style.boxShadow="0 0 0 0.25rem #e400007a";
            }
            b = false;
        }
    }

//#########################################################################################################################################

    if (document.myRegistr.data.value=="") {
        var data = document.getElementsByName("data");
        for(var i=0; i < data.length; i++){
            data[i].style.boxShadow="0 0 0 0.25rem #e400007a";
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