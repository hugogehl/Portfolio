<?php

namespace App\Model;

class CiraManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'cira';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}