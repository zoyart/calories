
// Переключение кнопок
const btn = document.querySelectorAll(".gender_button");
const man = document.querySelector(".man");
const woman = document.querySelector(".woman");
const value_input = document.getElementById("value_input");
let man_active = false;
let woman_active = false;

btn[0].addEventListener("click", ()=> {
    console.log("man");
    if(btn[0].parentNode.className == "man gender_wrapper" && man_active != true) {
        man_active = true;
        woman_active = false;
        woman.style.border = "4px solid transparent"; 
        man.style.border = "4px solid #62E48B";
        value_input.value = "male";
    }
    
    
});
btn[1].addEventListener("click", ()=> {
    console.log("woman");
    if(btn[1].parentNode.className == "woman gender_wrapper" && woman_active != true) {
        woman_active = true;
        man_active = false;
        man.style.border = "4px solid transparent";
        woman.style.border = "4px solid #62E48B";
        value_input.value = "female";
    }
    
});
