<?php

namespace App\Model;

class FluxManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'flux';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}