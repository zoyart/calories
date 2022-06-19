// Activities 
const activitiesBtns = document.querySelectorAll(".activities__div");
const activitiesValue = document.getElementById("activities-value_input");

// Genders
const genderBtns = document.querySelectorAll(".gender_button");
const genderValue = document.getElementById("value_input");

// Buttons function
function buttons(buttons_list, active_class, passive_class) {
    for(let i=0;i<buttons_list.length;i++) {
        buttons_list[i].addEventListener('click', (target) => {
            buttons_list[i].classList.toggle(active_class);
            for(let m=0;m<buttons_list.length;m++) {
                if(buttons_list[m] != buttons_list[i]) {
                    buttons_list[m].classList.remove(active_class);
                    buttons_list[m].classList.remove(passive_class);
                }
            }
        })
    }
    
}

buttons(activitiesBtns, "active_btn", "passive_btn");
buttons(genderBtns, "active_btn", "passive_btn")