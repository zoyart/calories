const activities = document.querySelector(".activities");
const activitiesBtns = document.querySelectorAll(".activities__div");
const value = document.getElementById("activities-value_input");

for(let i=0;i<activitiesBtns.length;i++) {
    activitiesBtns[i].addEventListener('click', (target) => {
        activitiesBtns[i].classList.toggle("active_btn");
        for(let m=0;m<activitiesBtns.length;m++) {
            if(activitiesBtns[m] != activitiesBtns[i]) {
                activitiesBtns[m].classList.remove("active_btn");
                activitiesBtns[m].classList.remove("passive_btn");
            }
        }
    })
}
