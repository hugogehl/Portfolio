<?php

namespace App\Model;

class TdfManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'tdf';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}