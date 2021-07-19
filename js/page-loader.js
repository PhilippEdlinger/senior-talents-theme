window.addEventListener('load', function () {
    let loginButton = document.getElementsByClassName("login-button");
    loginButton[0].addEventListener("click", load_page);
})

function load_page(){
  console.log("test");
}