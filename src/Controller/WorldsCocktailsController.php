<?php

namespace App\Controller;

class WorldsCocktailsController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/worldsCocktails.html.twig');
    }
}