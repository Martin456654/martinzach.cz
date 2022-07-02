const arrow = document.getElementById("arrow_down_slide");
arrow.addEventListener("click", slideDown);

function slideDown(){
    var element = document.getElementById("content_of_pages");
    element.scrollIntoView({behavior: "smooth"});
}