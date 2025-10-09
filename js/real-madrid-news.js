console.log("Real Madrid News JS loaded!");

// Slider funksionalitet për lajmet e fundit
let newsContainer = document.querySelector(".rm-news-container");
if(newsContainer){
    let items = newsContainer.querySelectorAll(".rm-news-item");
    let currentIndex = 0;
    let totalItems = items.length;
    let scrollInterval = 4000; // Auto scroll çdo 4 sekonda

    function showNews(index){
        items.forEach((item, i) => {
            item.style.transform = `translateX(${100 * (i - index)}%)`;
            item.style.transition = "transform 0.5s ease-in-out";
        });
    }

    function nextNews(){
        currentIndex = (currentIndex + 1) % totalItems;
        showNews(currentIndex);
    }

    // Butonat
    let btnNext = document.querySelector(".rm-next");
    let btnPrev = document.querySelector(".rm-prev");
    if(btnNext) btnNext.addEventListener("click", nextNews);
    if(btnPrev) btnPrev.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        showNews(currentIndex);
    });

    showNews(currentIndex);
    setInterval(nextNews, scrollInterval);
}
// Fund i JS për lajmet e Real Madrid

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
// Fund i JS për titujt rotues