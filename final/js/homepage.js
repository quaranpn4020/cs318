var changeTime = 2000;
var waitTime = 6000;
var imagesInSlide = 5;
var current = 0;

$(document).ready(
    
    function runSS() {
        // First find urls
        var indexOne = current;
        current++;
        if (current > imagesInSlide) {
            current = 1;
        }
        var indexTwo = current;

        var urlOne = "images/slideshow/test" + indexOne + ".jpg";
        var urlTwo = "images/slideshow/test" + indexTwo + ".jpg";

        // Set background images    
        $("#first").show();
        $("#first").css('background-image', 'url(' + urlOne + ')');
        

        // Hide second for toggle
        $("#second").hide();

        // Set second
        $("#second").css('background-image', 'url(' + urlTwo + ')');

        $("#first").fadeToggle(changeTime);
        $("#second").fadeToggle(changeTime);

        setTimeout(function callAgain() {
            runSS();
        }, changeTime + waitTime);
        
        
    }
);