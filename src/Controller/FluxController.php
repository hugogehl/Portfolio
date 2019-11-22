<?php

namespace App\Controller;

class FluxController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/flux.html.twig');
    }
}