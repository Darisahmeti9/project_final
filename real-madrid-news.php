<?php
document.addEventListener("DOMContentLoaded", function(){
console.log("Real Madrid News JS loaded!");

let rmContainer = document.querySelector(".rm-news-slider-container");
let rmItems = document.querySelectorAll(".rm-news-item");
let currentIndex = 0;

function showSlide(index){
    let width = rmContainer.clientWidth;
    rmItems.forEach((item, i) => {
        item.style.transform = `translateX(${(i - index) * width}px)`;
    });
}

// Buttons
document.getElementById("rm-prev").addEventListener("click", () => {
    if(currentIndex > 0) currentIndex--;
    showSlide(currentIndex);
});

document.getElementById("rm-next").addEventListener("click", () => {
    if(currentIndex < rmItems.length - 1) currentIndex++;
    showSlide(currentIndex);
});

// Auto scroll
setInterval(() => {
    if(currentIndex < rmItems.length - 1) currentIndex++;
    else currentIndex = 0;
    showSlide(currentIndex);
}, 5000);

// Initial setup
window.addEventListener("load", () => showSlide(currentIndex));
window.addEventListener("resize", () => showSlide(currentIndex));

});
?>