
var disp=19;

$("#btInt-").click(function(){
    var x=parseInt($("#bigliettiInt").text());
    var y=parseInt($("#totale").text());
    var z=parseInt($("#prezzoNormale").text());
    if(x>1){
        $("#bigliettiInt").text(x-1);
        disp++;
        $("#totale").text(y-z);
    }
});

$("#btInt").click(function(){
    var x=parseInt($("#bigliettiInt").text());
    var y=parseInt($("#totale").text());
    var z=parseInt($("#prezzoNormale").text());
    if(disp>0){
        $("#bigliettiInt").text(x+1);
        disp--;
        $("#totale").text(y+z);
    }
});

$("#btRid-").click(function(){
    var x=parseInt($("#bigliettiRid").text());
    var y=parseInt($("#totale").text());
    var z=parseInt($("#prezzoRidotto").text());
    if(x>0){
        $("#bigliettiRid").text(x-1);
        disp++;
        $("#totale").text(y-z);
    }
});

$("#btRid").click(function(){
    var x=parseInt($("#bigliettiRid").text());
    var y=parseInt($("#totale").text());
    var z=parseInt($("#prezzoRidotto").text());
    if(disp>0){
        $("#bigliettiRid").text(x+1);
        disp--;
        $("#totale").text(y+z);
    }
});