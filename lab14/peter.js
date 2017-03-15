function testFunction(event) {
    var keypressed = event.which || event.keyCode;
    var whichkey = String.fromCharCode(keypressed);
    
    var ball = document.getElementById("ball");
    //var offsets = ball.getBoundingClientRect();
    var style = getComputedStyle(ball);
    var top = style.getPropertyValue("top");
    var left = style.getPropertyValue("left");
    
    if (whichkey == "D") {
        var leftval = parseInt(left, 10);
        var leftnew = leftval + 10;
        ball.style.left = leftnew + "px";
    }
    
    if (whichkey == "S") {
        var topval = parseInt(top, 10);
        var topnew = topval + 10;
        ball.style.top = topnew + "px";
    }
    
    if (whichkey == "W") {
        var topval = parseInt(top, 10);
        var topnew = topval - 10;
        ball.style.top = topnew + "px";
    }
    
    if (whichkey == "A") {
        var leftval = parseInt(left, 10);
        var leftnew = leftval - 10;
        ball.style.left = leftnew + "px";
    }
    
    
}