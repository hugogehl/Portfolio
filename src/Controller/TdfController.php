<?php

namespace App\Controller;

class TdfController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/tdf.html.twig');
    }
}