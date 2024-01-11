const hamburger = document.querySelector(".nav-sm-right");
const navLeft = document.querySelector(".nav-left");
const navRight = document.querySelector(".nav-right");

hamburger.addEventListener("click", () => {
    navLeft.classList.toggle("hidden");
    navRight.classList.toggle("hidden");
});
