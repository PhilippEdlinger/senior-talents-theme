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
   
    jQuery(document).ready(function($) {
        
    	var data = {
    		'action': 'example_ajax_request',
    		'something': 'Hello world',
    		'another_thing': 14
    	}
    	$.post(ajaxVariable.url, data, function(response) {
    		console.log(response);
    	});
    });

    /*
    $.ajax({
        type : "POST",  //type of method
        url  : "../dbConnection.php",  //your page
        data : { email : email, password : password },// passing the values
        success: function(res){  
                    //do what you want here...
                    console.log(email+ ";" + password);  
                }
    });
   

    $.ajax({// Since WP 2.8 ajaxurl is always defined and points to admin-ajax.php
        data: {
            'action':'example_ajax_request', // This is our PHP function below
            email : email,
             password : password // This is the variable we are sending via AJAX
        },
        success:function(data) {
    // This outputs the result of the ajax request (The Callback)
            
    //window.alert(data);
        },  
        error: function(errorThrown){
            window.alert(errorThrown);
        }
    });  
    */


}