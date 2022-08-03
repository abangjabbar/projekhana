<?php

namespace App\Controllers;

use App\Models\MasterSupplierModel;
use App\Models\GroupHargaModel;
use App\Models\PembelianSheetModel;
use App\Models\PembelianSheetDetailModel;

class Pembelian extends BaseController
{
    protected $masterSupplierModel;
    protected $pembelianSheetModel;
    protected $groupHargaModel;
    protected $pembelianSheetDetailModel;

    public function __construct()
    {
        $this->masterSupplierModel = new masterSupplierModel();
        $this->pembelianSheetModel = new pembelianSheetModel();
        $this->groupHargaModel = new groupHargaModel();
        $this->pembelianSheetDetailModel = new pembelianSheetDetailModel();
    }

    public function masterSupplier()
    {
        $masterSupplier = $this->masterSupplierModel->findAll();

        $data = [
            'title' => 'Pembelian Sheet Tanpa SPK',
            'masterSupplier' => $masterSupplier
        ];

        echo view('pembelian/master_supplier', $data);
    }

    public function tambahMasterSupplier()
    {
        $data = [
            'title' => 'Tambah Supplier',
        ];
        return view('pembelian/tambah_master_supplier', $data);
    }

    public function simpanMasterSupplier()
    {
        $data = $this->request->getPost();
        $this->masterSupplierModel->insert($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('pembelian/masterSupplier');
    }

    public function editMasterSupplier($id = null)
    {
        $masterSupplier = $this->masterSupplierModel->find($id);
        $data['title'] = 'Edit MasterSupplier';
        if (is_object($masterSupplier)) {
            $data['masterSupplier'] = $masterSupplier;
            return view('pembelian/edit_master_supplier', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function updateMasterSupplier($id = null)
    {
        $data = $this->request->getPost();
        $this->masterSupplierModel->update($id, $data);
        session()->setFlashdata('success', 'Data berhasil diedit.');
        return redirect()->to('pembelian/masterSupplier');
    }

    public function pembelianSheet()
    {
        $pembelianSheet = $this->pembelianSheetModel->findAll();

        $data = [
            'title' => 'Pembelian Sheet Tanpa SPK',
            'groupHarga' => $this->groupHargaModel->findAll(),
            'pembelianSheet' => $pembelianSheet
        ];

        echo view('pembelian/pembelian_sheet', $data);
    }

    public function tambahPembelianSheet()
    {
        $data = [
            'title' => 'Tambah Pembelian Sheet Tanpa SPK',
            'groupHarga' => $this->groupHargaModel->findAll(),
            'masterSupplier' => $this->masterSupplierModel->findAll(),
            'pembelianSheet' => $this->pembelianSheetModel->findAll()
        ];
        return view('pembelian/tambah_pembelian_sheet', $data);
    }

    public function simpanPembelianSheet()
    {
        $data = $this->request->getPost();
        $this->pembelianSheetModel->insert($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');

        $pembelianSheetId = $this->pembelianSheetModel->insertID;
        return redirect()->to('pembelian/detailPembelianSheet/' . $pembelianSheetId);
    }

    public function updatePembelianSheet($pembelianSheetId)
    {
        $data = $this->request->getPost();
        $this->pembelianSheetModel->update($pembelianSheetId, $data);
        session()->setFlashdata('success', 'Data berhasil diedit.');
        return redirect()->to('pembelian/detailPembelianSheet/' . $pembelianSheetId);
    }

    public function detailPembelianSheet($pembelianSheetId)
    {
        $pembelianSheet = $this->pembelianSheetModel->find($pembelianSheetId);
        $data['title'] = 'Pembelian Sheet';
        if (is_object($pembelianSheet)) {
            $data['pembelianSheet'] = $pembelianSheet;
            $data['pembelianSheetDetail'] = $this->pembelianSheetDetailModel->getPembelianSheetDetail($pembelianSheetId);
            return view('pembelian/detail_pembelian_sheet', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function tambahDetailPembelianSheet($pembelianSheetId)
    {
        $pembelianSheet = $this->pembelianSheetModel->find($pembelianSheetId);
        $data = [
            'title' => 'Detail Pembelian Sheet',
            'pembelianSheet' => $pembelianSheet,
            'pembelianSheetDetail' => $this->pembelianSheetDetailModel->findAll()
        ];
        return view('pembelian/tambah_detail_pembelian_sheet', $data);
    }

    public function simpanDetailPembelianSheet($pembelianSheetId)
    {
        $this->pembelianSheetDetailModel->save([
            'id_pembelian_sheet' => $pembelianSheetId,
            'qty_pakai' => $this->request->getVar('qty_pakai'),
            'sheet_pakai' => $this->request->getVar('sheet_pakai'),
            'substance' => $this->request->getVar('substance'),
            'out_sheet' => $this->request->getVar('out_sheet'),
            'waste' => $this->request->getVar('waste'),
            'sheet_beli' => $this->request->getVar('sheet_beli'),
            'harga_dasar' => $this->request->getVar('harga_dasar'),
            'qty_order' => $this->request->getVar('qty_order'),
            'discount' => $this->request->getVar('discount'),
            'harga_out' => $this->request->getVar('harga_out'),
            'harga_exclude_ppn' => $this->request->getVar('harga_exclude_ppn'),
            'harga_total' => $this->request->getVar('harga_total'),
            'tgl_kirim' => $this->request->getVar('tgl_kirim'),
            'creasing' => $this->request->getVar('creasing')
        ]);

        return redirect()->to('/pembelian/detailPembelianSheet/' . $pembelianSheetId);
    }

    public function submitPembelianSheet()
    {
    }

    public function autofill()
    {
        $data = [
            'title' => 'AutoFill View'
        ];
        echo view('input_otomatis', $data);
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
