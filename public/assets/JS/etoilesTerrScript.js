//Photo over sur page étoiles
let photoEtoilesTerrBlock = document.querySelector('.photoEtoilesTerrBlock');

document.getElementById("etoile1").onmouseover = function() {etoiles_photo_one()};
function etoiles_photo_one() {
    photoEtoilesTerrBlock.style.backgroundImage = "url(../assets/images/etoilesTerr/etoiles_1.jpg)";
}

document.getElementById("etoile2").onmouseover = function() {etoiles_photo_two()};
function etoiles_photo_two() {
    photoEtoilesTerrBlock.style.backgroundImage = "url(../assets/images/etoilesTerr/etoiles_2.jpg)";
}