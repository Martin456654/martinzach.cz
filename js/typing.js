// header
let index_header = 0;
let currentText_header = "Martin Zach";
let letter_header = "";
var headerAnimation = document.getElementById("typing_header");

function type_header(){
    letter_header = currentText_header.slice(0, index_header++);

    document.querySelector(".typing_header").textContent = letter_header;

    if(index_header <= currentText_header.length){
        myFunction();
    }

};
type_header();

function myFunction(){
    setTimeout(type_header, 150);
}

setTimeout(() => {
    headerAnimation.classList.remove("typing_header");
}, 2200);

// tag

var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
    typeSpeed: 100,
    backSpeed: 40,
    startDelay: 1800,
    loop: true,
    loopCount: Infinity,
});

// const texts = ["Programmer", "Business", "Student", "Front-End Dev"];
// let count = 0;
// let index = 0;
// let currentText = "";
// let letter = "";
// var AnimationClass = document.querySelector(".typing");
// AnimationClass.classList.remove("typing");

// setTimeout(type, 1800);

// function type(){
//     AnimationClass.classList.add("typing");

//     if(count === texts.length){
//         count = 0;
//     }

//     currentText = texts[count];
//     letter = currentText.slice(0, index++);

//     document.querySelector(".typing").textContent = letter;

//     if(letter.length === currentText.length){
//         // for(let i = index; i > 0; i--){
//         //     setTimeout(() => {
//         //         // letter = letter.slice(0, index--);
//         //         console.log("-----");
//         //         console.log(index + " - " + letter);
//         //     }, 1000);
//         // }

//         count++;
//         index = 0;
//     }

//     if(index == 0){
//         setTimeout(type,1700);
//     }else{
//         setTimeout(type, 100);
//     }

// };