var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}


function showPage() {
  document.getElementById("form").style.display = "none";
  document.getElementById("loader").style.display = "block";
}
