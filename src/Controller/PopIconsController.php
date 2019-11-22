<?php

namespace App\Controller;

class PopIconsController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/popIcons.html.twig');
    }
}