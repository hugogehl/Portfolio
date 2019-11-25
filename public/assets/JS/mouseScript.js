// Cursor
document.onmousemove = suitsouris;
let cursor = document.getElementById("cursor");
cursor.__scale__ = 0.7;
function suitsouris(evenement)
{
    let x =  evenement.clientX;
    let y =  evenement.clientY;
    gsap.to(cursor, 0.5, {
        x: x,
        y: y,
        scale: cursor.__scale__,
        ease: Expo.easeOut,
    });
}

// Over
const cursorbig = document.querySelectorAll('[data-cursor]');

cursorbig.forEach(function(element) {
    element.addEventListener("mouseover", mouseOver);

    element.addEventListener("mouseout", mouseOut);

});

function mouseOver() {
    cursor.__scale__ = 1;
}

function mouseOut() {
    cursor.__scale__ = 0.7;
}