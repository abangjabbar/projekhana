<?php

namespace App\Controllers;


class Produksi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Produksi'
        ];
        return view('produksi/index', $data);
    }
}
