<?php

namespace App\Controller;

class EtoilesTerrestreController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/etoilesTerrestre.html.twig');
    }
}