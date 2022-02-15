window.addEventListener('load', function () {
        
    var modal = document.getElementsByClassName("modal");
    var span = document.getElementsByClassName("close");
    var btn = document.getElementsByClassName("myBtn");

    for(var i = 0; i < btn.length; i++) {
        var currentButtton = btn[i];
        var currentModal = modal[i];
        var currentSpan = span[i];
        
        //console.log(currentSpan);
        
        currentButtton.addEventListener("click", function() {
            currentModal.style.display = "block";
            } );
        currentSpan.addEventListener("click", function() {
            currentModal.style.display = "none";
            } );
    }


    /*
    btn.addEventListener("click", function() {
        modal.style.display = "block";
        } ); */
    
    
})