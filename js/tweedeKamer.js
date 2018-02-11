var ringCount = 6;
var W = 300;
var H = 150;
var seatRadius = 5;
var seatCounts = [36,30,30,24,18,12];
var seatGroupSize = [6,5,5,4,3,2];
var centerX = W/2;
var centerY = H;
var gangPadRatio = 0.2; //amount of arc reserved for gangpad
var ringDistance = 20;
//
var partyDevision = [{"Name": "VVD", "SeatCount": 70, "Color": "#ff8800"},{"Name": "CDA", "SeatCount": 50, "Color": "#00dd00"},{"Name": "D66", "SeatCount": 30, "Color": "#008800"}];
$(function() {
    W = parseInt($("#tweede-kamer")[0].width);
    H = W/2;
    seatRadius = Math.floor(H/30);
    ringDistance = W/15;
    
    renderTweedeKamer();   
        
     //define mouse over handler
     $("#tweede-kamer").mousemove(function(e) {
         
         var relativeX = e.pageX - $(this).offset().left;
         var relativeY = e.pageY - $(this).offset().top;

        //check whether the mouseover event is within one of the seats
        var i = 0;
        for (i = 0; i < partyDevision.length; i++) {
            //check against all seats and recall render with changed color, then change color back
            var j;
            for (j = 0; j < partyDevision[i].Seats.length; j++) {
                var distanceX = partyDevision[i].Seats[j].x - relativeX;
                var distanceY = partyDevision[i].Seats[j].y - relativeY;
                //pythagoras to find distance to center and see if it's within radius
                var distance = Math.sqrt(distanceX*distanceX + distanceY*distanceY);
                //user is mousing over a seat, highlight the party's seats:
                if (distance < seatRadius) {
                    renderTweedeKamer(partyDevision[i]);
                    console.log("match");
                    return;
                }
            }
        }
        renderTweedeKamer();
     });
     $("#tweede-kamer").mouseout(function() {
        renderTweedeKamer(); 
     });
});
function resetSeats() {
    partyDevision.forEach(function(p) { p.Seats = []; });
}

function renderTweedeKamer(highlightedParty) {
    
        resetSeats();
        
        var canvas = document.getElementById("tweede-kamer");
        var ctx = canvas.getContext("2d");
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        canvas.width = W;
        canvas.height = H;
        //ctx.fillStyle = "white";
        //ctx.fillRect(0,0,W,H);
        
        //loop over rings
        var seatsRendered = 0;
        var partyIndex = 0;
        var currentPartyToDraw = partyDevision[partyIndex];
        var ring;
        for (ring = 0; ring < ringCount; ring++) {
            var seatCount = seatCounts[ring]; //amount of seats in this ring
            var radius = (W/2)-seatRadius-(ring*ringDistance);
            var i;
            var extraSpace = 0; //accumulated extra space accounted to gangpad
            //move along imaginary arc line and draw seats
            for (i = 0; i < seatCount; i++) {
                //calculate center of seat along arc
                
                var gangPadSize = Math.PI*gangPadRatio/5;
                
                if (i % seatGroupSize[ring] == 0 && i > 0) {
                    extraSpace += gangPadSize;
                }
                var x = centerX + Math.cos(Math.PI + ((i+0.5)/seatCount)*(Math.PI*(1-gangPadRatio)) + extraSpace) * radius;
                var y = centerY + Math.sin(Math.PI + ((i+0.5)/seatCount)*(Math.PI*(1-gangPadRatio)) + extraSpace) * radius;
                
                if (seatsRendered >= currentPartyToDraw.SeatCount) {
                    seatsRendered = 0;
                    currentPartyToDraw = partyDevision[++partyIndex];
                }
                
                
                var highlightRadius = (highlightedParty && currentPartyToDraw.Name === highlightedParty.Name) ? 1 : 0;
                //draw shadow
                if (highlightRadius > 0) {
                    ctx.beginPath();
                    ctx.arc(x+1,y-1,seatRadius + highlightRadius,0,2*Math.PI);
                    ctx.fillStyle = "black";
                    ctx.fill();
                }
                ctx.beginPath();
                ctx.arc(x,y,seatRadius + highlightRadius,0,2*Math.PI);
                ctx.fillStyle = currentPartyToDraw.Color;
                ctx.fill();
                
                seatsRendered++;
                
                //save the seat to the party array for reference when a click occurs
                if (currentPartyToDraw["Seats"] === undefined) {
                    currentPartyToDraw["Seats"] = [];
                }
                currentPartyToDraw["Seats"].push({"x":x,"y":y});
            }
        }
}
