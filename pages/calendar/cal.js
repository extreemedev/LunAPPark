
const month_names = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre']
const total_day = ['31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31']

$("#prec").click(function(){
    var gt;
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

});



$("#succ").click(function(){
    var gt;
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

});

/*$("#1").click(function(){
    $(".days").removeClass("active");
    $(this).addClass("active");
});

$("#2").click(function(){
    $(".days").removeClass("active");
    $(this).addClass("active");
});*/

/*$("#giorni >").click(function(){
    $("#giorni >").removeClass("active");
    $(this).addClass("active");
});*/

$("#giorni >").click(function(){
    $(".active").removeClass("active");
    $("#giorni >").css("margin-bottom","0px");
    $(this).html("<span class=active>"+$(this).text()+"</span>");
    $(this).css("margin-bottom","150px")
});