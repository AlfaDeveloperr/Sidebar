const body = document.querySelector("body"),
    sidebar = body.querySelector(".sidebar"),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modetext = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
})
//Ligth Mode Dark Mode
modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
        modetext.innerText = "";
        modetext.innerText = "Dark  Mode"
    } else {
        modetext.innerText = "Light Mode"
    }
});
//Tarayıcıyı 90% Derecde Yakınlaştırmaya ayarlıyor bu kod

// Sayfa açıldığında tarayıcıda %90 yakınlaştırma yap
document.addEventListener('DOMContentLoaded', function () {
    document.body.style.zoom = '90%';
});