
var mini = true;
var mySidebar = document.getElementById("mySidebar");
var myNav = document.getElementById('mynav');

window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 30 || document.documentElement.scrollTop >= 30 ) {
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
        document.getElementById("mySidebar").style.width = "275px";
        // document.getElementById("main").style.marginLeft = "250px";
        
        mySidebar.classList.toggle("sidebar-shadow");
        this.mini = false;
    } else {
        // console.log("closing sidebar");
        document.getElementById("mySidebar").style.width = "65px";
        // document.getElementById("main").style.marginLeft = "85px";
        mySidebar.classList.toggle("sidebar-shadow");
        this.mini = true;
    }
}

var inputToggler = true;

function toggleActive(){
    
    var myActive = document.activeElement.id;

        if(myActive === "input-notes" || myActive === "input-title") {
            if (!$( "#input-title" ).length) {
                $("<input type='text' class='form-control my-input' id='input-title' placeholder='Title'>").prependTo(".form-group");
            }
        }else{
            $("#input-title").remove();
        }
}
    
// jquery funtion

// $("#input-trigger, #input-title").focus(function(){
//     $("<input type='text' class='form-control my-input' id='input-title' placeholder='Title''>").prependTo(".form-group");
// });

// $("#input-trigger, #input-title").focusout(function(){
//     $("#input-title").remove();
// });
