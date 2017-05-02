var changeTime = 4000;
var waitTime = 5000;

$(document).ready(
    function() {
        setTimeout(
            function testalert() {
                $("#first").hide().fadeIn(changeTime);
                $("#second").fadeOut(changeTime);
            }, waitTime
        );
        
        
    }
);