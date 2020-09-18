
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

// jquery funtion

$(document).ready(function() {
    var newHash      = "",
        $mainContent = $("#main-content"),
        $pageWrap    = $("#page-wrap"),
        baseHeight   = 0,
        $el;
        
    $pageWrap.height($pageWrap.height());
    baseHeight = $pageWrap.height() - $mainContent.height();
    
    $("nav").delegate("a", "click", function() {
        window.location.hash = $(this).attr("href");
        return false;
    });
    
    $(window).bind('hashchange', function(){
    
        newHash = window.location.hash.substring(1);
        
        if (newHash) {
            $mainContent
                .find("#guts")
                .fadeOut(200, function() {
                    $mainContent.hide().load(newHash + " #guts", function() {
                        $mainContent.fadeIn(200, function() {
                            $pageWrap.animate({
                                height: baseHeight + $mainContent.height() + "px"
                            });
                        });
                        $("nav a").removeClass("current");
                        $("nav a[href='"+newHash+"']").addClass("current");
                    });
                });
        };
        
    });
    
    $(window).trigger('hashchange');

});