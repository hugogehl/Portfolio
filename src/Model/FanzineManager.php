<?php

namespace App\Model;

class FanzineManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'fanzine';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}