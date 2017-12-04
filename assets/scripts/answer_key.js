var tally = "0";
function check(){
    if(document.getElementById("q1a2").checked){
        tally ++;
    }
    if(document.getElementById("q2a1").checked){
        tally ++;
    }
    if(document.getElementById("q3a1").checked){
        tally ++;
    }
    if(document.getElementById("q4a4").checked){
        tally ++;
    }
    if(document.getElementById("q5a2").checked){
        tally ++;
    }
    if(document.getElementById("q6a3").checked){
        tally ++;
    }
    if(tally >="5"){
        // When the user clicks the button, open the modal 
        alert("tally > 5");
        function() {
        modal.style.display = "block";
}
    }
    else{
        alert("Fail! Because tally = " + tally);
        event.preventDefault();
    }

}
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
//btn.onclick = function() {
//    modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}