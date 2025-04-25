
// Description 

const toggle_description = document.querySelector('.banner .toggle-description');
const description = document.querySelector('.banner .description');

toggle_description.onclick = () => {
    description.classList.toggle('show');
}


