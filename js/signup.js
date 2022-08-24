window.addEventListener('load', function () {
    let signupButton = document.getElementById("signup-button");
    signupButton.addEventListener("click", load_profile_page);

})

function load_profile_page(){
    window.location.assign("http://localhost/wordpress/wordpress/index.php/profile/");
}

function closePwForm() {
   let form = document.getElementById("popup-background");
   form.classList.remove("popup-background-show")
   form.classList.add("popup-background-hide")

}
function openPwForm() {
    let form = document.getElementById("popup-background");
   form.classList.remove("popup-background-hide")
   form.classList.add("popup-background-show")
}



function closeEmailForm() {
    let form = document.getElementById("popup-background-email");
    form.classList.remove("popup-background-show")
    form.classList.add("popup-background-hide")
 
 }
 function openEmailForm() {
     let form = document.getElementById("popup-background-email");
    form.classList.remove("popup-background-hide")
    form.classList.add("popup-background-show")
 }
 