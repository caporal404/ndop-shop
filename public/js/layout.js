// Menu

const toggle_menu = document.querySelector('.toggle-menu');
const menu = document.querySelector('.menu');

toggle_menu.onclick = () => {
    menu.classList.toggle('active');
    toggle_menu.classList.toggle('active');
}

// Action utilisateur

const toggle_user_action = document.querySelector('.user .icon');
const user_action = document.querySelector('.user .user-action');

toggle_user_action.onclick = () => {
    user_action.classList.toggle('active');
    toggle_user_action.classList.toggle('active');
}