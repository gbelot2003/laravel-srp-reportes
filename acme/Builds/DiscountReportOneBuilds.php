<?php

namespace Acme\Builds;

use Acme\Abstracts\BuildAbstract;
use Acme\Querys\Discounts\DiscountReportOneQueryGet;
use Acme\Repos\DiscontRepo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DiscountReportOneBuilds extends BuildAbstract
{
    protected $request;

    function __construct(Model $model)
    {
        $this->repo = new DiscontRepo($model);
    }

    public function buildCall()
    {
        return $this->resultReturn();
    }

    protected function resultReturn()
    {
        return $this->queryBuilder();
    }

    public function getRequest(Request $request)
    {
        return parent::getRequest($request);
    }

    protected function queryBuilder()
    {
        $query1 = new DiscountReportOneQueryGet();
        return $this->repo->reporte1("2017-05-14 00:00:00", "2017-06-14 11:59:59", $query1);
    }
}