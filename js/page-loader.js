window.addEventListener('load', function () {
    let loginButton = document.getElementsByClassName("login-button");
    loginButton[0].addEventListener("click", load_login_page);

    let regisButton = document.getElementsByClassName("register-button");
    console.log(regisButton);
    regisButton[0].addEventListener("click", load_signup_page);
})

function load_login_page(){
    window.location.assign("https://localhost/wordpress/wordpress/index.php/login/");
}

function load_signup_page(){
    window.location.assign("https://localhost/wordpress/wordpress/index.php/signup/ ");
}