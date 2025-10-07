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
