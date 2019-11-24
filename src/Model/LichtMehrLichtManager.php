<?php

namespace App\Model;

class LichtMehrLichtManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'licht_mehr_licht';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}