//Menu HEADER

//Seleciona o menuOper
let menuOper = document.querySelector('.menu-opener');

//Seleciona o nav dentro do header
let nav = document.querySelector('header nav');

//Cria um listener para o evento click do menuOpener
menuOper.addEventListener('click', ()=>{
    if(nav.classList.contains('opened')){
        nav.classList.remove('opened');
        menuOper.querySelector('.close-icon').style.display='none';
        menuOper.querySelector('.hamburguer-icon').style.display='flex';

     }else{
        nav.classList.add('opened');
        menuOper.querySelector('.close-icon').style.display='flex';
        menuOper.querySelector('.hamburguer-icon').style.display='none';
    }
});