var isRunning = false;

function move() {
    if (!isRunning) {
        isRunning = true;
        var w = $(window).width();
        var h = $(window).height();
        var randomLeft = Math.floor(Math.random() * w + 1);
        var randomTop = Math.floor(Math.random() * h + 1);
        $("#widget").animate({
            left: randomLeft,
            top: randomTop
        }, 500);
        setTimeout(function(){isRunning = false;}, 500);
    }
    
    
}