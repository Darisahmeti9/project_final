// Subtitle / Title rotation
const titles = [
    "Real Madrid News 2025",
    "Latest Updates from Santiago Bernabeu"
];
let titleIndex = 0;
const titleElement = document.getElementById("rm-title-text");

setInterval(() => {
    titleIndex = (titleIndex + 1) % titles.length;
    titleElement.style.opacity = 0;
    setTimeout(() => {
        titleElement.textContent = titles[titleIndex];
        titleElement.style.opacity = 1;
    }, 300); // efekt fade
}, 5000); // ndërron çdo 5 sekonda
