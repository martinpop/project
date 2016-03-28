<?php

namespace App\Model;

use Nette;
use Nette\Database\Context;


class BaseRepository extends Nette\Object
{
    /** @var Context $database */
    protected $database;
    
    
    /**
     * @param Context $database
     */
    public function __construct(Context $database)
    {
        $this->database = $database;
    }
    
}