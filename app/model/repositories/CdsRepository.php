<?php

namespace App\Model\Repositories;

use Nette\Database;
use App\Model;


class CdsRepository extends Model\BaseRepository implements Model\IRepository
{
    
    /**
     * @param int $id
     * @return Database\Table\ActiveRow
     */
    public function find($id)
    {
        return $this->findAll()->get($id);
    }
    
    
    /**
     * @param int $id
     * @return Database\Table\Selection
     */
    public function findAll()
    {
        return $this->database->table('cds');
    }
    

    /**
     * @param array $values
     * @return Database\Table\ActiveRow
     */
    public function save($values)
    {
        return $this->findAll()->insert($values);
    }
    
}