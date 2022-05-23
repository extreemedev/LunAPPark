var myVar;
var myVar2;

function myLoader() {
  myVar = setTimeout(hidePage, 3000);
  myVar2 = setTimeout(showPage, 3000);
}


function hidePage() {
  document.getElementById("form").style.display = "none";
  document.getElementById("loader").style.display = "block";
}


function showPage() {
  document.getElementById("form").style.display = "block";
  document.getElementById("loader").style.display = "none";
}