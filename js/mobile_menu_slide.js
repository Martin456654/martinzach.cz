const menu_mobile_screen = document.getElementById("menu_mobile_screen");
const menu_icon1 = document.getElementById("menu_mobile_icon1");
const menu_icon2 = document.getElementById("menu_mobile_icon2");

var element = document.getElementById("content_of_pages");

menu_icon1.addEventListener("click", slideMenu);
menu_icon2.addEventListener("click", slideMenuBack);

function slideMenu(){
    menu_mobile_screen.style.left = 0;
    setTimeout(function(){
        element.scrollIntoView({behavior: "smooth"});
    }, 500);
}

function slideMenuBack(){
    menu_mobile_screen.style.left = "100%";
    setTimeout(function(){
        element.scrollIntoView({behavior: "smooth"});
    }, 500);
}
