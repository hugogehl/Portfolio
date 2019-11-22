<?php

namespace App\Controller;

class SpecimenTypoController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Pages/specimenTypo.html.twig');
    }
}