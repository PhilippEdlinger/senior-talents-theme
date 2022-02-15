function closeJobForm() {
    let form = document.getElementById("popup-background");
    form.classList.remove("popup-background-show")
    form.classList.add("popup-background-hide")
 
 }
 function openJobForm() {
     let form = document.getElementById("popup-background");
    form.classList.remove("popup-background-hide")
    form.classList.add("popup-background-show")
 }