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

//TESTEMONIALS
//Cria um vetor para armazenar as frases e os iconess
let testemonials =[
    {quote: '"Mais do que nunca, os animais de estimação ' + 'são tratados como menbros da família."', origin: 'cbs.svg'},
    {quote: '"DogDev é um serviço de entrega direto ao ' + 'consumidor, preparado na hora com ingredientes' + ' 100% reais. Ingredientes que humanos conhecem."', origin:'forbes.svg'},
    {quote: '"DogDev usa ingredientes simples e limpos ' + 'em seus pratos."', origin:'fox.svg'},
    {quote: '"Vejo você DogDev como um verdadeiro herói."', origin: 'sharktank.svg'}
];
//Seleciona os elementos no html
let testemonialQuote = document.querySelector('.testemonials .quote');
let testemonialIcons = document.querySelector('.testemonials .icons');
//cria um for para preencher os icones
for(let tindex in testemonials){
    let img = document.createElement('img');
    img.setAttribute('src', './assets/images/' + testemonials[parseInt(tindex)].origin);
    img.style.cursor='pointer';
    img.addEventListener('click', ()=> fillTestemonial(parseInt(tindex)));
    testemonialIcons.appendChild(img);
}

//variaveis para o testemunho corrente em timer
let currentTestemonial=0;
let testemonialTimer;

//função para preencher a frase
const fillTestemonial = (index) =>{
    
    clearTimeout(testemonialTimer);
    currentTestemonial = index;
    testemonialQuote.innerHTML = 
    testemonials[currentTestemonial].quote;
    let imgs = testemonialIcons.querySelectorAll('img');
    for(let img of imgs) img.style.opacity=0.2;
    imgs[currentTestemonial].style.opacity=1;
    testemonialTimer = setTimeout(nextTestemonial, 3000);
}
const nextTestemonial =() =>{
    if(testemonials[currentTestemonial+1]){
        fillTestemonial(currentTestemonial+1);
    }else{
    fillTestemonial(0);
    }
}
nextTestemonial();

//FAQ
let currentFaq = 0;
let faqItems = document.querySelectorAll('.faq .accordion .item');
 
faqItems.forEach((el, index) => {
    el.querySelector('.title').addEventListener('click', () => setfaq(index));
});
 
// Abre a pergunta que a pessoa clicou
const setfaq = (index) => {
    currentFaq = index;
 
    // Verifica se a pergunta atual já está aberta e fecha caso esteja
    if (faqItems[currentFaq].classList.contains('opened')) {
        faqItems[currentFaq].classList.remove('opened');
        return;
    }
 
    // Mantém fechada todas as outras perguntas
    faqItems.forEach((item) => item.classList.remove('opened'));
 
    // Abre a faq que foi clicada, caso não esteja aberta
    faqItems[currentFaq].classList.add('opened');
};