window.addEventListener('load', function () {
    let loginButton = document.getElementsByClassName("login-button");
    loginButton[0].addEventListener("click", load_login_page);
})

function load_login_page(){
    console.log("TEst")
    window.location.assign("http://localhost/wordpress/wordpress/index.php/login/");
}