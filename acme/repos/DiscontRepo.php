<?php

namespace Acme\Repos;

use Illuminate\Database\Eloquent\Model;
use Acme\Abstracts\RepositoryModelAbstract;
use Acme\Intefaces\QueryGetInterface;

class DiscontRepo extends RepositoryModelAbstract
{

    function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function reporte1($param1, $param2, QueryGetInterface $query)
    {
        $array = [$param1, $param2];
        $query->getParams($array, $this->model);
        return $query->output();
    }
}