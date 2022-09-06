<?php

namespace App\Controllers;

use App\Models\MasterSalesModel;
use App\Models\MasterCustomerModel;

class Penjualan extends BaseController
{
    protected $db, $builder;
    protected $masterSalesModel;
    protected $masterCustomerModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->masterSalesModel = new MasterSalesModel();
        $this->masterCustomerModel = new MasterCustomerModel();
    }

    public function masterSales()
    {
        $data = [
            'title' => 'Master Sales',
            'sales' => $this->masterSalesModel->findAll()
        ];

        echo view('penjualan/master_sales', $data);
    }

    public function tambahMasterSales()
    {
        $data = [
            'title' => 'Tambah Sales Baru'
        ];

        echo view('penjualan/tambah_master_sales', $data);
    }

    public function simpanMasterSales()
    {
        $data = $this->request->getPost();
        $this->masterSalesModel->insert($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan!');
        return redirect()->to('penjualan/masterSales');
    }

    public function editMasterSales($id = null)
    {
        $masterSales = $this->masterSalesModel->find($id);
        $data['title'] = 'Edit Penawaran Harga';
        if (is_object($masterSales)) {
            $data['masterSales'] = $masterSales;
            return view('penjualan/edit_master_sales', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function updateMasterSales($id = null)
    {
        $data = $this->request->getPost();
        $this->masterSalesModel->update($id, $data);
        session()->setFlashdata('success', 'Data berhasil diubah!');
        return redirect()->to('penjualan/masterSales');
    }

    public function deleteMasterSales($id = null)
    {
        $this->masterSalesModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus!');
        return redirect()->to('penjualan/masterSales');
    }


    public function masterCustomer()
    {
        $data = [
            'title' => 'Master Customer',
            'customer' => $this->masterCustomer->findAll()
        ];

        echo view('penjualan/master_customer', $data);
    }
}
