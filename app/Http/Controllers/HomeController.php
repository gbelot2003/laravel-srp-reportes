<?php

namespace App\Http\Controllers;


use Acme\Builds\DiscountReportOneBuilds;
use App\Discount;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->discount = new Discount();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        $build = new DiscountReportOneBuilds($this->discount);
        return $build->buildCall();
    }
}
