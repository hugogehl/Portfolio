<?php

namespace App\Controller;

class TypoGController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/typoG.html.twig');
    }
}