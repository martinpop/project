<?php

namespace App\Model;


interface IRepository
{
    
    /**
     * @param int $id
     * @return array
     */
    function find($id);
    
}