<?php

namespace App\Controllers;

class Relatorio extends BaseController
{
    
    public function index()
    {
        return view('relatorios/index');
    }
}