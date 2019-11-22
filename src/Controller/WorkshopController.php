<?php

namespace App\Controller;

class WorkshopController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/workshop.html.twig');
    }
}