<?php

namespace App\Controller;

class ArtoopController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/artoop.html.twig');
    }
}