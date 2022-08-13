<?php

namespace App\Controllers;

use App\Models\PembelianSheetModel;
use App\Models\MasterSupplierModel;

class Pembelian extends BaseController
{
    protected $masterSupplierModel;
    protected $pembelianSheetModel;

    public function __construct()
    {
        $this->pembelianSheetModel = new pembelianSheetModel();
        $this->masterSupplierModel = new MasterSupplierModel();
    }


    public function index()
    {
        $pembelianSheet = $this->pembelianSheetModel->findAll();

        $data = [
            'title' => 'Pembelian Sheet Tanpa SPK',
            'pembelianSheet' => $pembelianSheet
        ];

        echo view('pembelian/pembelian_sheet', $data);
    }

    public function tambahPembelianSheet()
    {
        $data = [
            'title' => 'Tambah Pembelian Sheet',
            'masterSupplier' => $this->masterSupplierModel->findAll(),
        ];

        echo view('pembelian/tambah_pembelian_sheet', $data);
    }

    public function autoComplete()
    {
        $master_supplier_id = $_POST['master_supplier_id'];
        $s = "SELECT nama_supplier as nama_supplier_b FROM master_supplier WHERE master_supplier_id='$master_supplier_id'";
        $res = $this->db->query($s)->row_array();
        echo json_encode($res);
    }

    function get_autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->masterSupplierModel->search_kode($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    // $arr_result[] = $row->kode_supplier;

                    $arr_result[] = array(
                        'label' => $row->kode_supplier,
                        'nama_supplier' => $row->nama_supplier,
                        'waktu_pembayaran' => $row->waktu_pembayaran,
                    );
                echo json_encode($arr_result);
            }
        }
    }
}
