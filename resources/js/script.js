// Activities
const activitiesBtns = document.querySelectorAll(".activities__div");
const activitiesValue = document.getElementById("activities-value_input");

// Genders
const genderBtns = document.querySelectorAll(".gender_button");
const genderValue = document.getElementById("value_input");

// Buttons function
function buttonsFun(buttons_list, active_class, passive_class) {
    for(let i=0;i<buttons_list.length;i++) {
        buttons_list[i].addEventListener('click', () => {
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

buttonsFun(activitiesBtns, "active_btn", "passive_btn");
buttonsFun(genderBtns, "active_btn", "passive_btn");

// Transition of forms
const submitBtns = document.querySelectorAll(".submit_wrapper");
const pages = document.querySelectorAll(".container");

function submitBtnsFun(sendButtons, pages) {
    for(let i=0;i<sendButtons.length;i++) {
        sendButtons[i].addEventListener('click', () => {
            pages[i+1].classList.remove("hidden")
            pages[i+1].classList.add("active")
            for(let p=0; p<pages.length; p++) {
                if(pages[p] != pages[i+1]) {
                    pages[p].classList.add("hidden")
                    pages[p].classList.remove("active")
                }
            }
        })
    }
}
submitBtnsFun(submitBtns, pages);

