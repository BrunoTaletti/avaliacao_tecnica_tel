window.onload = function(){

const card_container = document.querySelector('.card-app-container');
const card_box = document.querySelector('.card-app-box');

card_container.addEventListener('mousemove', (e) =>{
    let xAxis = (window.innerWidth / 2 - e.pageX) / 2500;
    let yAxis = (window.innerHeight / 2 - e.pageY) / 2500;
    card_box.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});

card_container.addEventListener('mouseenter', (e) => {
    card_box.style.transition = 'none';
});

card_container.addEventListener('mouseleave', (e) => {
    card_box.style.transition = 'all 0.5s ease';
    card_box.style.transform = `rotateY(0deg) rotateX(0deg)`;
});
}
