let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
var swiper = new swiper(".home-slider",{
    loop:true,
    nevigation:{
        nextE1: ".swiper-button-next",
        prevE1: ".swiper-button-prev",
    },
});
var swiper = new swiper(".reviews-slider",{
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
    },
});

let loadMoreBtn = document.querySelector('.packages .load more .btn');
let currentaItem = 3;

loadMoreBtn.Oneclick = ()=>{
    let boxes = [...document.querySelectorAll('.package .box')]};
    for (var i = currentItem; 1 <currentItem + 3; i++){
        boxeS[i].style.display = 'inline-block';
    };
    currentItem +=3;
    if(current >=boxes.length){
        loadMoreBtn.style.display = 'none';
    }
    
    
       