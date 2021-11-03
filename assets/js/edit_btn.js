// // html elements
// const edt_btn = document.getElementById("edit_btn");
// const input_change_name = document.getElementById("input_name");
// const input_change_content = document.getElementById("input_content");

// let nameText = input_change_name.value;
// let contentText = input_change_content.textContent;

// let actualNameText = input_change_name.value;
// let actualContentText = input_change_content.value;

// let active = false;

// input_change_name.addEventListener("input", (event) => {
//     active = doAfterChange(actualNameText, input_change_name, actualContentText, input_change_content, nameText, contentText, active);
// });

// input_change_content.addEventListener("input", (event) => {
//     active = doAfterChange(actualNameText, input_change_name, actualContentText, input_change_content, nameText, contentText, active);
// });

// function doAfterChange(actualNameText, input_change_name, actualContentText, input_change_content, nameText, contentText, active){
//     actualNameText = input_change_name.value;
//     actualContentText = input_change_content.value;
    
//     if(actualNameText != nameText){
//         active = true;
//     }else{
//         if(actualContentText != contentText){
//             active = true;
//         }else{
//             active = false;
//         }
//     }
    
//     if(actualNameText.length == 0){
//         active = false;
//     }
    
//     if(actualContentText.length == 0){
//         active = false;
//     }

//     actualizeBtn(active);

//     return active;
// }

// function actualizeBtn(active){
//     if(active == true){
//         edt_btn.classList.add("active");
//     }else{
//         edt_btn.classList.remove("active");
//     }
// }

// function submitHandler(active){
//     if(active == false){
//         alert("Žádné políčko nesmí být prázdné a text nesmí být stejný, jako před úpravou.");
//         return false;
//     }
// };