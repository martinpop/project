<?php

namespace App\Presenters;

use App\Model\Repositories;


class HomepagePresenter extends BasePresenter
{
    /** @var Repositories\CdsRepository @inject */
    public $cds;

    
    public function renderDefault()
    {
        //dump($this->cds->find(5));
        //dump($this->cds->findAll()->fetchAll());

        $this->template->cds = $this->cds->findAll()->order('interpret')->order('none2');
    }

}
