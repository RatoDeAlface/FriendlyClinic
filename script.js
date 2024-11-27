const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () =>{
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})

// USUARIO

let profileDropdownList = document.querySelector('.perfil-dropdown-list');
let btn = document.querySelector('.perfil-btn');

const toggle = ()=> profileDropdownList.classList.toggle('userAtivo');


// AO CLICAR NA TELA O DROPDOWN ESCONDE
window.addEventListener('click', function (e){
    if (!btn.contains(e.target)) profileDropdownList.classList.remove('userAtivo')
})

