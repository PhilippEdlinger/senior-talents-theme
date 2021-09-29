/*
$.ajax({
    url: 'http://localhost:8080/seniors',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
    },
    type: "GET", /* or type:"GET" or type:"PUT" 
    dataType: "json",
    data: {
    },
    success: function (result) {
        console.log(result);
    },
    error: function () {
        console.log("error");
    }
});
*/
/*
let response = fetch('http://localhost:8080/seniors', {
    headers: {
      Authentication: 'Origin'
    }
  });

if (response.ok) { //  if HTTP-status is 200-299
  // get the response body (the method explained below)
  let json = response.json();
} else {
  alert("HTTP-Error: " + response.status);
}
*/

/*
$.getJSON('http://localhost:8080/seniors', function(posts){
    alert(posts[0]);
    console.log('Test' + posts);
});
*/

/*
const sendPost = async  _ => { 
    const response = await fetch("http://localhost:8080/seniors", {
        method: 'GET'
    });
    console.log('Location header');
}

sendPost();    
*/

