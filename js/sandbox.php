<?php
header("Content-type: application/javascript");

 $testOutput = "HelloWorld";
 $newImg = "https://localhost/wordpress/wordpress/wp-content/themes/senior-talents-theme/img/002.png";
?>

window.addEventListener('load', function () {
    let profilepic = document.getElementById("test_profile_image");
    profilepic.addEventListener("click", load_new_profile_pic);

})

function load_new_profile_pic(){
    let profilepicdiv = document.getElementById("test_profile_image");
    profilepicdiv.style.backgroundImage = "url(" + "<?php echo $newImg; ?>"  + ")";
}

//console.log("<?php echo $testOutput; ?>");


//img.style.backgroundImage = "url(" + images[x] + ")";