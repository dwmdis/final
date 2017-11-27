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
        alert("Passed! tally = " + tally);
    }
    else{
        alert("Fail! Because tally = " + tally);
    }

}