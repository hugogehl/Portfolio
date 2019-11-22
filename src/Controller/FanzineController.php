<?php

namespace App\Controller;

class FanzineController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/fanzine.html.twig');
    }
}