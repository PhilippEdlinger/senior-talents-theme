window.addEventListener('load', function () {
    let signupButton = document.getElementById("signup_c-button");
    signupButton.addEventListener("click", load_profile_page);

})

function load_profile_page(){
    window.location.assign("http://localhost/wordpress/wordpress/index.php/profile/");
}