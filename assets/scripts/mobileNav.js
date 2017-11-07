
//opens the mobile navigation
function openNav() {
    "use strict";
    document.getElementById("myMobilenav").style.width = "250px";
}
/* closes the mobile navigation */
function closeNav() {
    "use strict";
    document.getElementById("myMobilenav").style.width = "0";
}
// --------------------------------------------------------------------
//THIS SECTION BELOW IS FOR THE SUBNAVIGATION ELEMENTS
var myId;
function getId(ele) {
    "use strict";
    myId = ele.id;
    window.console.log("getId() triggered ", myId);
}
function openSubNav() {
    "use strict";
    var navSection;
    var elems;
    if (myId === "home-section") {
        navSection = "subnav1";
    } else if (myId === "intermediate-section") {
        navSection = "subnav2";
    } else if (myId === "advanced-section") {
        navSection = "subnav3";
    }
    elems = document.getElementsByClassName(navSection);
    for (var i = 0; i < elems.length; i++) {
        elems[i].style.display = "block";
    }
    window.console.log("openSubNav triggered, and myId is: ", myId);
}
function closeSubNav(){
    "use strict";
    var elems1 = document.getElementsByClassName("subnav1");
    var elems2 = document.getElementsByClassName("subnav2");
    var elems3 = document.getElementsByClassName("subnav3");
    for (var j = 0; j < elems1.length; j++) {
        elems1[j].style.display = "none";
        elems2[j].style.display = "none";
        elems3[j].style.display = "none";
    }
    window.console.log("closeSubNav triggered");
}

/*var elems = document.getElementsByClassName('btn-pageMenu');
for (var i=0;i<elems.length;i+=1){
  elems[i].style.display = 'block';
}*/
//END OF SECTION FOR SUBNAVIGATIONAL ELEMENTS