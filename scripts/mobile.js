function clicca(){

const doc = document;
const menuOpen = doc.querySelector("navbar-toggler");
const menuClose = doc.querySelector("navbar-toggler");
const overlay = doc.querySelector(".overlay");

menuOpen.addEventListener("click", () => {
  overlay.classList.add("overlay--active");
});

menuClose.addEventListener("click", () => {
  overlay.classList.remove("overlay--active");
});
}