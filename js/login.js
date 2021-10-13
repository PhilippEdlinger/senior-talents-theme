window.addEventListener('load', function () {
    let loginButton = document.getElementById("login-button");
    loginButton.addEventListener("click", read_input_values);

})

function load_profile_page() {
    window.location.assign("http://localhost/wordpress/wordpress/index.php/profile/");
}

function read_input_values(){
    let email = document.getElementById("login-form-input-email").value;
    let password = document.getElementById("login-form-input-password").value;
    console.log(email+ ";" + password);    
    $.ajax({
        type : "POST",  //type of method
        url  : "../dbConnection.php",  //your page
        data : { email : email, password : password },// passing the values
        success: function(res){  
                    //do what you want here...
                    console.log(email+ ";" + password);  
                }
    });
}