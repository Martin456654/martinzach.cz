greenButton(1);
switchPage(1);

$(".navigationPageBtn").on("click", (e) => {
    if(e.target.nodeName == "I"){
        var elem = e.target.parentElement;
    }else{
        var elem = e.target;
    }

    var pageNum = elem.getAttribute("data-id");

    greenButton(pageNum);
    switchPage(pageNum);
    closeMenu();
});

function changePageAndButton(pageNum){
    greenButton(pageNum);
    switchPage(pageNum);
};

function greenButton(pageNum){
    for(let i = 0; i < 5; i ++){
        $(".page" + (i + 1) + "Btn").removeClass("green");
    }

    $(".page" + pageNum + "Btn").addClass("green");
}

function switchPage(pageNum){
    for(let i = 0; i < 5; i ++){
        $("#page" + (i + 1)).removeClass("showAll");
    }

    $("#page" + pageNum).addClass("showAll");
}

function closeMenu(){
    element.scrollIntoView({behavior: "smooth"});
    $("#menu_mobile_screen").css("left", "100%");
}