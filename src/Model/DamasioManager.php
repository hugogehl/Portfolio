<?php

namespace App\Model;

class DamasioManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'damasio';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}