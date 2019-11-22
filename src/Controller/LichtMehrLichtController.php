<?php

namespace App\Controller;

class LichtMehrLichtController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/lichtMehrLicht.html.twig');
    }
}