window.onload = function(){

const card_container = document.querySelector('.card-container');
const card_box = document.querySelector('.card-box');
const monster = document.querySelector('.monster img');
const title = document.querySelector('.card-content h1');
const subtitle = document.querySelector('.card-content h3');
const form = document.querySelector('.card-content form');
const buttons = document.querySelector('.buttons');
const login = document.querySelector('.login');

card_container.addEventListener('mousemove', (e) =>{
    let xAxis = (window.innerWidth / 2 - e.pageX) / 450;
    let yAxis = (window.innerHeight / 2 - e.pageY) / 450;
    card_box.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});

card_container.addEventListener('mouseenter', (e) => {
    card_box.style.transition = 'none';
    
    monster.style.transform = "translateZ(150px)";
    
    title.style.transform = "translateZ(100px)";
    
    subtitle.style.transform = "translateZ(50px)";
    
    form.style.transform = "translateZ(50px)";
    
    buttons.style.transform = "translateZ(15px)";

    login.style.transform = "translateZ(30px)";
});

card_container.addEventListener('mouseleave', (e) => {
    card_box.style.transition = 'all 0.5s ease';
    card_box.style.transform = `rotateY(0deg) rotateX(0deg)`;

    monster.style.transform = "translateZ(0px)";
    monster.style.transition = 'all 0.5s ease';

    title.style.transform = "translateZ(0px)";
    title.style.transition = 'all 0.5s ease';

    subtitle.style.transform = "translateZ(0px)";
    subtitle.style.transition = 'all 0.5s ease';

    form.style.transform = "translateZ(0px)";
    form.style.transition = 'all 0.5s ease';

    buttons.style.transform = "translateZ(0px)";
    buttons.style.transition = 'all 0.5s ease';

    login.style.transform = "translateZ(0px)";
    login.style.transition = 'all 0.5s ease';
});
}