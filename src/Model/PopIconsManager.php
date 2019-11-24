<?php

namespace App\Model;

class PopIconsManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'pop_icons';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}