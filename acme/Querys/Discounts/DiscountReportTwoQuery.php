<?php

namespace Acme\Querys\Discounts;

use Acme\Abstracts\QueryBuilderAbstract;
use Acme\Intefaces\QueryPostInterface;
use Illuminate\Http\Request;

class DiscountReportTwoQuery extends QueryBuilderAbstract implements QueryPostInterface
{

    protected $params;
    protected $model;


    /**
     * @param Request $request
     * @param $model
     * @return mixed
     * @internal param $Request $
     */
    public function getParams(Request $request, $model)
    {
        $this->params = $request;
        $this->model = $model;
    }


    protected function constructQuery()
    {
        $name = $this->params->get('name');
        return $this->model->where("name", $name)->get();
    }

    /**
     * @return mixed
     */
    public function output()
    {
        return $this->constructQuery();
    }
}