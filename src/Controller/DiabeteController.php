<?php

namespace App\Controller;

class DiabeteController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/diabete.html.twig');
    }
}