
var success = false;
var modal = document.getElementById('myModal');
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
        //alert("tally > 5");
        modal.style.display = "block";
        modal.innerHTML = "<p id='modal-insert'>Congrats!<br/>You got " + tally + "/6!</p>";
        event.preventDefault();
        success = true;
        tally = 0;
        
    }
    else{
        //alert("Fail! Because tally = " + tally);
        modal.style.display = "block";
        modal.innerHTML = "<p id='modal-insert'>Sorry!<br/>You only got " + tally + "/6.</p>";
        event.preventDefault();
        tally = 0;
    }

}
