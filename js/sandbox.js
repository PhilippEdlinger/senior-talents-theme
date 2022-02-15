    console.log("tets");

// Get the modal

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
   

    // When the user clicks the button, open the modal
    
    window.addEventListener('load', function () {
        
        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];
        var btn = document.getElementById("myBtn");
        btn.addEventListener("click", function() {
            modal.style.display = "block";
            } );
        span.addEventListener("click", function() {
            modal.style.display = "none";
            } );
        
    })

    // When the user clicks anywhere outside of the modal, close it
    /*
    window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
    }*/

