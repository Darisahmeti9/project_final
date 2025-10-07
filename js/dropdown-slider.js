console.log("Dropdown & Slider for Real Madrid loaded!");

// ===== Dropdown Menu =====
let dropdown = document.querySelector('.menu'); // ul main menu
let submenu = document.querySelector('.sub-menu'); // li a submenu
let buttonClick = document.querySelector('.check-button'); // hamburger button
let hamburger = document.querySelector('.menu-icon');

buttonClick.addEventListener('click', () => {
    dropdown.classList.toggle('show-dropdown');
    if(submenu){
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button');
});

// ===== Image Slider =====
let container = document.getElementById("container");
let imgs_containers = document.getElementsByClassName("img_container");
let imgs_count = imgs_containers.length;
let current_img_index = 0;

// Auto scroll settings
let autoScroll_enabled = true; // e aktivizuar për Real Madrid slider
let autoScroll_interval = 3000; // 3 sekonda
let autoScroll_dir = 1;

function setupSlider(){
    let container_width = container.clientWidth;
    for(let i = 0; i < imgs_count; i++){
        let element = imgs_containers[i];
        let new_left_pos = container_width * i;
        element.style.left = new_left_pos + "px";
    }
}

// ===== Navigation Buttons =====
function onLeftButton(){
    if(current_img_index > 0){
        current_img_index--;
        updateSliderPositions();
    }
}
function onRightButton(){
    if(current_img_index < imgs_count - 1){
        current_img_index++;
        updateSliderPositions();
    }
}

// ===== Update Slider Positions =====
function updateSliderPositions(){
    let container_width = container.clientWidth;
    for(let i = 0; i < imgs_count; i++){
        let element = imgs_containers[i];
        let new_left_pos = container_width * (i - current_img_index);
        element.style.left = new_left_pos + "px";
    }
}

// ===== Auto Scroll =====
function autoScroll(){
    if(!autoScroll_enabled) return;

    if(current_img_index == 0) autoScroll_dir = 1;
    else if(current_img_index == imgs_count - 1) autoScroll_dir = -1;

    current_img_index += autoScroll_dir;
    updateSliderPositions();
}

// Initialize
setupSlider();
setInterval(autoScroll, autoScroll_interval);
