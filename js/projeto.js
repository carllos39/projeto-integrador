"use strict"

window.addEventListener('scroll', function(){
    const header = this.document.querySelector('header');
    header.classList.toggle('sticky', this.window.scrollY > 0);
});

function toggleMenu(){
    var menuToggle = document.querySelector('.toggle');
    var menu = document.querySelector('.menu');
    menuToggle.classList.toggle('active');
    menu.classList.toggle('active');
}