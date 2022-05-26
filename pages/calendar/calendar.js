
const month_names = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre']
const total_day = ['31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31']

$("#prec").click(function(){
    var gt;
    $("#giorni >").css("background","#eee");
    $("#giorni >").css("color","#777");
    for(var c = 0; c<month_names.length; c++){
        if($("#mese").text().replace(/\s+/g, " ").replace(/^\s|\s$/g, "")==month_names[c]){
            if(c==0){
                var m=parseInt($("#anno").text());
                m--;
                $("#anno").text(m);
                $("#mese").text(month_names[11]);
                gt=total_day[11];
            }else{
                $("#mese").text(month_names[c-1]);
                gt=total_day[c-1];
            }
            break;
        }
    }
    var start=0;
    for(var c = 6; c>0; c--){
        if($("#"+c).text()==""){
            if(c==1){
                if(gt==28){
                    start=2;
                }
                if(gt==30){
                    start=7;
                }
                if(gt==31){
                    start=6;
                }
                break;
            }
            if(c==2){
                if(gt==28){
                    start=3;
                }
                if(gt==30){
                    start=1;
                }
                if(gt==31){
                    start=7;
                }
                break;
            }
            if(c==3){
                if(gt==28){
                    start=4;
                }
                if(gt==30){
                    start=2;
                }
                if(gt==31){
                    start=1;
                }
                break;
            }
            if(c==4){
                if(gt==28){
                    start=5;
                }
                if(gt==30){
                    start=3;
                }
                if(gt==31){
                    start=2;
                }
                break;
            }
            if(c==5){
                if(gt==28){
                    start=6;
                }
                if(gt==30){
                    start=4;
                }
                if(gt==31){
                    start=3;
                }
                break;
            }
            if(c==6){
                if(gt==28){
                    start=7;
                }
                if(gt==30){
                    start=5;
                }
                if(gt==31){
                    start=4;
                }
                break;
            }
        }
    }
    if(start==0){
        if(gt==28){
            start=1;
        }
        if(gt==30){
            start=6;
        }
        if(gt==31){
            start=5;
        }
    }
    
    var g=1;
    for(var c = 1; c<43; c++){
        if(c<start){
            $("#"+c).text("");
        } else{
            if(g<=gt){
                $("#"+c).text(g);
                g++;
            } else {
                $("#"+c).text("");
            }
        }
    }

    var g=101;
    var gt2=parseInt(gt)+100;
    for(var c = 101; c<143; c++){
        if(c<start+100){
            $("#"+c).html("<div style=font-size:12px;padding-bottom:35px;></div>");
        } else{
            if(g<=gt2){
                if(c==106 || c==107 || c==113 || c==114 || c==120 || c==121 || c==127 || c==128 || c==134 || c==135 || c==141 || c==142){
                    $("#"+c).html("<div style=font-size:12px;padding-bottom:35px;>Biglietto adulto:<br>30.00<br>Biglietto ridotto:<br>10.00</div>");
                } else {
                    $("#"+c).html("<div style=font-size:12px;padding-bottom:35px;>Biglietto adulto:<br>22.50<br>Biglietto ridotto:<br>10.00</div>");
                }
                g++;
            } else {
                $("#"+c).html("<div style=font-size:12px;padding-bottom:35px;></div>");
            }
        }
    }

});



$("#succ").click(function(){
    var gt;
    $("#giorni >").css("background","#eee");
    $("#giorni >").css("color","#777");
    for(var c = 0; c<month_names.length; c++){
        if($("#mese").text().replace(/\s+/g, " ").replace(/^\s|\s$/g, "")==month_names[c]){

            if(c==11){
                var m=parseInt($("#anno").text());
                m++;
                $("#anno").text(m);
                $("#mese").text(month_names[0]);
                gt=total_day[0];
            }else{
                $("#mese").text(month_names[c+1]);
                gt=total_day[c+1];
            }
            break;
        }
    }
    var start;
    for(var c = 8; c<43; c++){
        if($("#"+c).text()==""){
            if(c==8 || c==15 || c==22 || c==29 || c==36){
                start=1;
                break;
            }
            if(c==9 || c==16 || c==23 || c==30 || c==37){
                start=2;
                break;
            }
            if(c==10 || c==17 || c==24 || c==31 || c==38){
                start=3;
                break;
            }
            if(c==11 || c==18 || c==25 || c==32 || c==39){
                start=4;
                break;
            }   
            if(c==12 || c==19 || c==26 || c==33 || c==40){
                start=5;
                break;
            }
            if(c==13 || c==20 || c==27 || c==34 || c==41){
                start=6;
                break;
            }
            if(c==14 || c==21 || c==28 || c==35 || c==42){
                start=7;
                break;
            }
        }
    }
    var g=1;
    for(var c = 1; c<43; c++){
        if(c<start){
            $("#"+c).text("");
        } else{
            if(g<=gt){
                $("#"+c).text(g);
                g++;
            } else {
                $("#"+c).text("");
            }
        }
    }

    var g=101;
    var gt2=parseInt(gt)+100;
    for(var c = 101; c<143; c++){
        if(c<start+100){
            $("#"+c).html("<div style=font-size:12px;padding-bottom:35px;></div>");
        } else{
            if(g<=gt2){
                if(c==106 || c==107 || c==113 || c==114 || c==120 || c==121 || c==127 || c==128 || c==134 || c==135 || c==141 || c==142){
                    $("#"+c).html("<div style=font-size:12px;padding-bottom:35px;>Biglietto adulto:<br>30.00<br>Biglietto ridotto:<br>10.00</div>");
                } else {
                    $("#"+c).html("<div style=font-size:12px;padding-bottom:35px;>Biglietto adulto:<br>22.50<br>Biglietto ridotto:<br>10.00</div>");
                }
                g++;
            } else {
                $("#"+c).html("<div style=font-size:12px;padding-bottom:35px;></div>");
            }
        }
    }

});


$("#giorni >").click(function(){
    if($(this).text()==""){

        $("#giorni >").css("background","#eee");
        $("#giorni >").css("color","#777");

    } else {

        $("#giorni >").css("background","#eee");
        $("#giorni >").css("color","#777");

        if(parseInt($(this).text())<100) {

            var x2=parseInt($(this).attr("id"))+100;
            $(this).css("background","#ffb656");
            $(this).css("color","white");
            $("#"+x2).css("background","#ffb656");
            $("#"+x2).css("color","white");

        } else{

            var x=parseInt($(this).attr("id"))-100;
            $(this).css("background","#ffb656");
            $(this).css("color","white");
            $("#"+x).css("background","#ffb656");
            $("#"+x).css("color","white");

        }
    }
});