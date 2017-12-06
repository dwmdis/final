var smodal = document.getElementById("searchModal");
var span = document.getElementsByClassName("close")[0];
var found = false;
var tag_map = {
    home: "index.php",
    introduction: "index.php",
    history: "index.php",
    commandline: "beginner/commandline.php",
    basics: "beginner/commands.php",
    commands: "beginner/commands.php",
    modal: "intermediate/modal.php",
    modes: "intermediate/modes.php",
    plugins: "advanced/plugins.php",
    review: "advanced/review.php",
    quiz: "test.php",
    test: "test.php",
    certificate: "test.php",
    resources: "resources.php",
    help: "resources.php",
    glossary: "glossary.php",
    about: "about.php"
};

function search(){
    console.log("search initiated");
    var search_string = document.getElementById("searchb").value;
    
    console.log("search_string = " + search_string);
    for(var i in tag_map){
        console.log("for loop started");
        if(i === search_string){
            console.log("tag_map[i] = " + tag_map[i]);
            window.location = "http://serenity.ist.rit.edu/~iste240t04/240/final/" + tag_map[i];
            found = true;
        }
    }
    if(!found){
        document.getElementById("searchModal").style.display = "block";
        document.getElementById("searchModal").innerHTML = "<p id='modal-insert'>Sorry, we couldn't find that page!<br/>Try searching for a page title.</p>";
        // event.preventDefault();
    }
}
// When the user clicks anywhere outside of the modal, close it
document.onclick = function(event) {
    if (event.target == document.getElementById("searchModal")) {
        document.getElementById("searchModal").style.display = "none";
    }   
}
