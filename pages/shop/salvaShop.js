function salvaShop() {

    var now = new Date();
    var time = now.getTime();
    time += 3600 * 250; // aggiungo 15 minuti
    now.setTime(time);

    var dat=$("#dataScelta").text();
    document.cookie="dataB="+dat+"; expires="+now.toGMTString();
    var z=parseInt($("#prezzoNormale").text());
    document.cookie="prezzoInt="+z+"; expires="+now.toGMTString();
    var x=parseInt($("#bigliettiInt").text());
    document.cookie="totInt="+x+"; expires="+now.toGMTString();
    var r=parseInt($("#prezzoRidotto").text());
    document.cookie="prezzoRid="+r+"; expires="+now.toGMTString();
    var t=parseInt($("#bigliettiRid").text());
    document.cookie="totRid="+t+"; expires="+now.toGMTString();
    var y=parseInt($("#totale").text());
    document.cookie="tot="+y+"; expires="+now.toGMTString();
}