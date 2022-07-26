switchPage(1);

function switchPage(pageId, e = null){
    $(".icon-page-navigation").each((index, element) => {
        element.classList.remove("green");
    });

    if(e != null){
        e.target.classList.add("green");
    }else{
        $(".navigationBtn" + pageId).addClass("green");
    }

    $(".page").each((index, element) => {
        element.classList.remove("showAll");
    })

    $("#page" + pageId).addClass("showAll");
}