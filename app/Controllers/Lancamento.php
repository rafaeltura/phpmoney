<?php

namespace App\Controllers;

class Lancamento extends BaseController
{
    
    public function index()
    {
        return view('lancamento/index');
    }
}