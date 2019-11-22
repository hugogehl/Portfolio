<?php

namespace App\Controller;

class AboutController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/about.html.twig');
    }
}