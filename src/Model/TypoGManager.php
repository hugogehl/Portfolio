<?php

namespace App\Model;

class TypoGManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'typo_g';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}