window.addEventListener('load', function () {
    let loginButton = document.getElementById("login-button");
    loginButton.addEventListener("click", load_profile_page);

})

function load_profile_page(){
    window.location.assign("http://localhost/wordpress/wordpress/index.php/profile/");
}