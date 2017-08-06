function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}

//function myFunction() {
  //var txt;
  //var username = prompt("Input User Name..", "Cholticha");
  //if (username == null || username == "") {
  //    txt = "User cancelled the prompt.";
  //} else {
  //    txt = "User name : " + username + "  >>  Login complete. ";
  //}
  //document.getElementById("demo").innerHTML = txt;
//}

//function myFunction() {
  //var txt;
  //if (confirm("Account OK!") == true) {
  //    txt = "Account OK!";
  //} else {
  //    txt = "Account Not OK!";
  //}
  //document.getElementById("demo").innerHTML = txt;
//}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
