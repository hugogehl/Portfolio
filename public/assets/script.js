// Menu
const buttons = document.querySelectorAll('[data-filter]');
const categories = document.querySelectorAll('[data-cat]');

buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        const cat = button.dataset.filter;

        categories.forEach(function(category) {
            category.classList.add('is-hidden');

            if (category.dataset.cat.includes(cat) || cat === '*') {
                category.classList.remove('is-hidden');
            }
        });
    });
});

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

//Image fond over
let bg = document.querySelector('.background');

document.getElementById("diabete").onmouseover = function() {diabete()};
function diabete() {
    bg.style.backgroundImage = "url(../assets/images/diabete/diab_9.jpg)";
}

document.getElementById("artoop").onmouseover = function() {artoop()};
function artoop() {
    bg.style.backgroundImage = "url()";
}

document.getElementById("etoilesTerrestre").onmouseover = function() {etoiles_terrestre()};
function etoiles_terrestre() {
    bg.style.backgroundImage = "url(../assets/images/etoilesTerr/etoiles_1.jpg)";
}

document.getElementById("cira").onmouseover = function() {cira()};
function cira() {
    bg.style.backgroundImage = "url(../assets/images/cira/cira_9.jpg)";
}

document.getElementById("workshop").onmouseover = function() {workshop()};
function workshop() {
    bg.style.backgroundImage = "url()";
}

document.getElementById("fanzine").onmouseover = function() {fanzine()};
function fanzine() {
    bg.style.backgroundImage = "url()";
}

document.getElementById("flux").onmouseover = function() {flux()};
function flux() {
    bg.style.backgroundImage = "url()";
}

document.getElementById("worldsCocktails").onmouseover = function() {worlds_cocktails()};
function worlds_cocktails() {
    bg.style.backgroundImage = "url(https://hugogehl.github.io/website/images/Worlds_cocktail_1.JPG)";
}

document.getElementById("popIcons").onmouseover = function() {pop_icons()};
function pop_icons() {
    bg.style.backgroundImage = "url(../assets/images/popIcons/pop_1.jpg)";
}

document.getElementById("tdf").onmouseover = function() {tdf()};
function tdf() {
    bg.style.backgroundImage = "url(../assets/images/tdf/tdf_1.jpg)";
}

document.getElementById("lichtMehrLicht").onmouseover = function() {licht_mehr_licht()};
function licht_mehr_licht() {
    bg.style.backgroundImage = "url(../assets/images/bd/bd_1.jpg)";
}

document.getElementById("specimenTypo").onmouseover = function() {specimen_typo()};
function specimen_typo() {
    bg.style.backgroundImage = "url(../assets/images/specTypo/spec_1.jpg)";
}

document.getElementById("typoG").onmouseover = function() {typo_g()};
function typo_g() {
    bg.style.backgroundImage = "url()";
}

document.getElementById("damasio").onmouseover = function() {damasio()};
function damasio() {
    bg.style.backgroundImage = "url(../assets/images/damasio/dam_1.jpg)";
}

