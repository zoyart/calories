// Сделать в конце
// let block = document.querySelector(".container");
// if(block.className == "")

// Переключение кнопок
let btn = document.querySelectorAll(".gender_button");
let man = document.querySelector(".man");
let woman = document.querySelector(".woman");
let form = document.getElementById("gender_form");
let value_input = document.getElementById("value_input");
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
