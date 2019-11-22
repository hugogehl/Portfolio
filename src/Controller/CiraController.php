<?php

namespace App\Controller;

class CiraController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/cira.html.twig');
    }
}