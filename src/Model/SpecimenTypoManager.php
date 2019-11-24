<?php

namespace App\Model;

class SpecimenTypoManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'specimen_typo';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}