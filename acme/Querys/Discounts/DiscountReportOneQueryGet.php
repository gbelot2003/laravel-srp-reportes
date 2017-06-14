<?php

namespace Acme\Querys\Discounts;

use Acme\Abstracts\QueryBuilderAbstract;
use Acme\Intefaces\QueryGetInterface;

class DiscountReportOneQueryGet extends QueryBuilderAbstract implements QueryGetInterface
{

    protected $params;
    protected $model;
    /**
     * @param array $params
     * @return mixed
     */
    public function getParams(array $params, $model)
    {
        $this->params = $params;
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function output()
    {
        return $this->constructQuery();
    }

    /**
     * @return mixed
     */
    protected function constructQuery()
    {

        return $this->model->whereBetween('created_at', [$this->params[0], $this->params[1]])->get();
    }
}