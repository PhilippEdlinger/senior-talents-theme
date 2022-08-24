window.addEventListener('load', function () {
        
    let modal = document.getElementsByClassName("modal");
    let span = document.getElementsByClassName("close");
    let btn = document.getElementsByClassName("myBtn");

    for(let i = 0; i < btn.length; i++) {
        let currentButtton = btn[i];
        let currentModal = modal[i];
        let currentSpan = span[i];
                
        currentButtton.addEventListener("click", function() {
            currentModal.style.display = "block";
            } );
        currentSpan.addEventListener("click", function() {
            currentModal.style.display = "none";
            } );
    }
})
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