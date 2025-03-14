//menu HEADER
//seleciona o menuOpener
let menuOpener = document.querySelector('.menu-opener');
//seleciona o nav dentro do header
let nav = document.querySelector('header nav');
//cria um listener para o evento click no menuOpener
menuOpener.addEventListener('click', ()=>{
    if(nav.classList.contains('opened')){
        nav.classList.remove('opened');
        menuOpener.querySelector('.close-icon').style 
            .display='none';
        menuOpener.querySelector('.hamburger-icon').style
            .display='flex';
    }else{
        nav.classList.add('opened');
        menuOpener.querySelector('.close-icon').style 
        .display='flex';
        menuOpener.querySelector('.hamburger-icon').style
        .display='none';
    }
});