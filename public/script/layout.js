// Menu

const toggle_menu = document.querySelector('.toggle-menu');
const menu = document.querySelector('.menu');

toggle_menu.onclick = () => {
    menu.classList.toggle('active');
    toggle_menu.classList.toggle('active');
}