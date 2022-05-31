var myVar;

function myLoader() {
  myVar = setTimeout(showLoader, 0);
  myVar = setTimeout(showPage, 2000);

}

function showLoader(){
  document.getElementById("loader").style.display = "block";
  document.getElementById("mypage").style.display = "none";

}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("mypage").style.display = "block";
}