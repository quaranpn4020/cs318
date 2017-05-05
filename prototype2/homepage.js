var changeTime = 4000;
var waitTime = 3000;
var imagesInSlide = 4;
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

        var urlOne = "slideshowimages/test" + indexOne + ".jpg";
        var urlTwo = "slideshowimages/test" + indexTwo + ".jpg";

        // Set background images    
        $("#first").css('background-image', 'url(' + urlOne + ')');
        $("#first").show();

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