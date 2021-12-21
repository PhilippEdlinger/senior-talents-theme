window.addEventListener('load', function () {
    let loginButton = document.getElementById("login-button");
   loginButton.addEventListener("click", read_input_values);

})

function load_profile_page() {
    window.location.assign("http://localhost/wordpress/wordpress/index.php/profile/");
}

