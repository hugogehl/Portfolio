<?php

namespace App\Controller;

use App\Model\EtoilesTerrManager;

class EtoilesTerrestreController extends AbstractController
{
    public function index()
    {
        $etoilesManager = new EtoilesTerrManager();
        $etoilesTerr = $etoilesManager->selectAll();

        return $this->twig->render('Pages/etoilesTerrestre.html.twig', ['photoEtoiles'=>$etoilesTerr]);
    }
}