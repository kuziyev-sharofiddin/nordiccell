
const menuContent = document.getElementById('burger');
const burger = document.querySelector("#__nuxt > div > header > div > div.header-bottom > div > div > svg");

burger.onclick = function (e) {
    menuContent.classList.toggle("active")
}
