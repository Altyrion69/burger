let whatIDo = document.querySelectorAll(".whatIDo");
let btnText = document.querySelectorAll(".learnmore");

for (let i = 0; i < whatIDo.length; i++) {
    btnText[i].addEventListener('click', () => {
        if (whatIDo[i].style.display === "inline") {
            btnText[i].innerHTML = "En savoir plus...";
            whatIDo[i].style.display = "none";
        } else {
            btnText[i].innerHTML = "moins...";
            whatIDo[i].style.display = "inline";
        }
    })
}

let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.nav');
let menuItem = document.querySelectorAll('.nav__link');

menuBtn.addEventListener('click', function () {
    menuBtn.classList.toggle('active');
    menu.classList.toggle('active');
})


menuItem.forEach(function (menuItem) {
    menuItem.addEventListener('click', function () {
        menuBtn.classList.toggle('active');
        menu.classList.toggle('active');
    })
})



