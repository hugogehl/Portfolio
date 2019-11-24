<?php

namespace App\Model;

class WorkshopManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'workshop';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}