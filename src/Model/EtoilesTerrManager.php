<?php

namespace App\Model;

class EtoilesTerrManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'etoiles_terrestre';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}