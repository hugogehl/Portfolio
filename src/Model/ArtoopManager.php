<?php

namespace App\Model;

class ArtoopManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'artoop';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}