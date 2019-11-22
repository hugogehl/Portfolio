<?php

namespace App\Controller;

class SerigraphiesController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/serigraphies.html.twig');
    }
}