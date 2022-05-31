function salvaShop() {
    var dat=$("#dataScelta").text();
    document.cookie="dataB="+dat;
    var z=parseInt($("#prezzoNormale").text());
    document.cookie="prezzoInt="+z;
    var x=parseInt($("#bigliettiInt").text());
    document.cookie="totInt="+x;
    var r=parseInt($("#prezzoRidotto").text());
    document.cookie="prezzoRid="+r;
    var t=parseInt($("#bigliettiRid").text());
    document.cookie="totRid="+t;
    var y=parseInt($("#totale").text());
    document.cookie="tot="+y;
}