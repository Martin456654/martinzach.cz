const skillBar1 = document.getElementById("skillBar1");
const skillBar2 = document.getElementById("skillBar2");
const skillBar3 = document.getElementById("skillBar3");
const skillBar4 = document.getElementById("skillBar4");

const percent1 = document.getElementById("percent1");
const percent2 = document.getElementById("percent2");
const percent3 = document.getElementById("percent3");
const percent4 = document.getElementById("percent4");

// function actualizatePercent() {
//     percent1.innerHTML = skillBar1.style.width; 
//     percent2.innerHTML = skillBar2.style.width; 
//     percent3.innerHTML = skillBar3.style.width; 
//     percent4.innerHTML = skillBar4.style.width; 
//  }
 
//  setTimeout(actualizatePercent, 1000);

function startAnimateSkills(){
    skillBar1.style.width = "12%";
    skillBar1.classList.add("animateSkillBar1"); 
    
    
    skillBar2.style.width = "12%";
    skillBar2.classList.add("animateSkillBar2");  
    
    
    skillBar3.style.width = "12%";
    skillBar3.classList.add("animateSkillBar3");  
    
    
    skillBar4.style.width = "12%";
    skillBar4.classList.add("animateSkillBar4");   
    
    
}