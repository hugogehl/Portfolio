<?php

namespace App\Model;

class DiabeteManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'diabete';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}