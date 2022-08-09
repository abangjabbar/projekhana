<?php

namespace App\Controllers;

use App\Models\PembelianSheetModel;

class Pembelian extends BaseController
{
    public function __construct()
    {
        $this->pembelianSheetModel = new pembelianSheetModel();
    }

    public function index()
    {
    }

    public function pembelianSheet()
    {
        $pembelianSheet = $this->pembelianSheetModel->findAll();

        $data = [
            'title' => 'Pembelian Sheet Tanpa SPK',
            'pembelianSheet' => $pembelianSheet
        ];

        echo view('pembelian/pembelian_sheet', $data);
    }
}
