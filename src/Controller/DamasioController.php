<?php

namespace App\Controller;

class DamasioController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/damasio.html.twig');
    }
}