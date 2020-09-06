
var mini = true;
var mySidebar = document.getElementById("mySidebar");
var myNav = document.getElementById('mynav');

window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 80 || document.documentElement.scrollTop >= 80 ) {
        myNav.classList.add("mynav-shadow");
        myNav.classList.remove("mynav-border");
    } 
    else {
        myNav.classList.add("mynav-border");
        myNav.classList.remove("mynav-shadow");
    }
};

function toggleSidebar() {
    if (mini) {
        // console.log("opening sidebar");
        document.getElementById("mySidebar").style.width = "250px";
        // document.getElementById("main").style.marginLeft = "250px";
        
        mySidebar.classList.toggle("sidebar-shadow");
        this.mini = false;
    } else {
        // console.log("closing sidebar");
        document.getElementById("mySidebar").style.width = "85px";
        // document.getElementById("main").style.marginLeft = "85px";
        mySidebar.classList.toggle("sidebar-shadow");
        this.mini = true;
    }
}