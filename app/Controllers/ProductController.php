<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        //
        return view('product/index');
    }

    public function create()
    {
        return view('product/create');
    }
}
