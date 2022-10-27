<?php

namespace App\Controllers;

use App\Models\MasterSalesModel;
use App\Models\MasterCustomerModel;
use App\Models\ParameterBiayaModel;
use App\Models\HargaJualModel;
use App\Models\PenawaranHargaModel;
use App\Models\SalesOrderModel;
use App\Models\BarangModel;
use App\Models\SalesOrderBarangModel;

class Penjualan extends BaseController
{
    protected $db, $builder;
    protected $masterSalesModel;
    protected $masterCustomerModel;
    protected $parameterBiayaModel;
    protected $hargaJualModel;
    protected $penawaranHargaModel;
    protected $salesOrderModel;
    protected $barangModel;
    protected $salesOrderBarangModel;
    protected $helpers = ['form', 'url', 'html'];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->masterSalesModel = new MasterSalesModel();
        $this->masterCustomerModel = new MasterCustomerModel();
        $this->parameterBiayaModel = new ParameterBiayaModel();
        $this->hargaJualModel = new HargaJualModel();
        $this->penawaranHargaModel = new PenawaranHargaModel();
        $this->salesOrderModel = new SalesOrderModel();
        $this->barangModel = new BarangModel();
        $this->salesOrderBarangModel = new salesOrderBarangModel();
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
            'customer' => $this->masterCustomerModel->getAll()
        ];

        echo view('penjualan/master_customer', $data);
    }

    public function tambahMasterCustomer()
    {
        $data = [
            'title' => 'Tambah Customer Baru',
            'sales' => $this->masterSalesModel->findAll()
        ];

        echo view('penjualan/tambah_master_customer', $data);
    }

    public function simpanMasterCustomer()
    {
        $data = $this->request->getPost();
        $this->masterCustomerModel->insert($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan!');
        return redirect()->to('penjualan/masterCustomer');
    }

    public function editMasterCustomer($id = null)
    {
        $masterCustomer = $this->masterCustomerModel->find($id);
        $sales = $this->masterSalesModel->findAll();
        $data['title'] = 'Edit Penawaran Harga';
        if (is_object($masterCustomer)) {
            $data['masterCustomer'] = $masterCustomer;
            $data['sales'] = $sales;
            return view('penjualan/edit_master_customer', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function updateMasterCustomer($id = null)
    {
        $data = $this->request->getPost();
        $this->masterCustomerModel->update($id, $data);
        session()->setFlashdata('success', 'Data berhasil diubah!');
        return redirect()->to('penjualan/masterCustomer');
    }

    public function deleteMasterCustomer($id = null)
    {
        $this->masterCustomerModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus!');
        return redirect()->to('penjualan/masterCustomer');
    }

    public function parameterBiaya()
    {
        $data = [
            'title' => 'Parameter Biaya',
            'parameter' => $this->parameterBiayaModel->findAll()
        ];

        echo view('penjualan/parameter_biaya', $data);
    }

    public function tambahParameterBiaya()
    {
        $data = [
            'title' => 'Tambah Parameter Biaya',
            'sales' => $this->parameterBiayaModel->findAll()
        ];

        echo view('penjualan/tambah_parameter_biaya', $data);
    }

    public function simpanParameterBiaya()
    {
        $data = $this->request->getPost();
        $this->parameterBiayaModel->insert($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan!');
        return redirect()->to('penjualan/parameterBiaya');
    }

    public function editParameterBiaya($id = null)
    {
        $parameterBiaya = $this->parameterBiayaModel->find($id);
        $data['title'] = 'Edit Penawaran Harga';
        if (is_object($parameterBiaya)) {
            $data['parameterBiaya'] = $parameterBiaya;
            return view('penjualan/edit_parameter_biaya', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function updateParameterBiaya($id = null)
    {
        $data = $this->request->getPost();
        $this->parameterBiayaModel->update($id, $data);
        session()->setFlashdata('success', 'Data berhasil diubah!');
        return redirect()->to('penjualan/parameterBiaya');
    }

    public function deleteParameterBiaya($id = null)
    {
        $this->parameterBiayaModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus!');
        return redirect()->to('penjualan/parameterBiaya');
    }

    public function hitungHarga()
    {
        $data = [
            'title' => 'Hitung Harga',
            'hargaJual' => $this->hargaJualModel->findAll()
        ];

        echo view('penjualan/hitung_harga', $data);
    }

    public function tambahHitungHarga()
    {
        $data = [
            'title' => 'Tambah Hitung Harga'
        ];

        echo view('penjualan/tambah_hitung_harga', $data);
    }

    public function penawaranHarga()
    {
        $data = [
            'title' => 'Penawaran Harga',
            'penawaranHarga'  => $this->penawaranHargaModel->findAll()
        ];

        echo view('penjualan/penawaran_harga', $data);
    }

    public function tambahPenawaranHarga()
    {
        $data = [
            'title' => 'Tambah Penawaran Harga'
        ];

        echo view('penjualan/tambah_penawaran_harga', $data);
    }

    public function salesOrder()
    {
        $data = [
            'title' => 'Penjualan',
            'salesOrder' => $this->salesOrderModel->findAll()
        ];

        echo view('penjualan/sales_order', $data);
    }

    public function simpanSalesOrder()
    {
        $data = $this->request->getPost();
        $this->salesOrderModel->insert($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan!');

        $salesOrderId = $this->salesOrderModel->insertID;
        return redirect()->to('penjualan/tambahSalesOrder/' .  $salesOrderId);
    }

    public function tambahSalesOrder($salesOrderId = null)
    {

        $salesOrder = $this->salesOrderModel->find($salesOrderId);
        $data['title'] = 'Tambah Sales Order';
        if (is_object($salesOrder)) {
            $data['salesOrder'] = $this->salesOrderModel->find($salesOrderId);
            $data['barang'] = $this->barangModel->findAll();
            $data['salesOrderBarang'] = $this->salesOrderBarangModel->findAll();
            return view('penjualan/tambah_sales_order', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function updateSalesOrder($salesOrderId = null)
    {
        $data = $this->request->getPost();
        $this->salesOrderModel->update($salesOrderId, $data);
        session()->setFlashdata('success', 'Data berhasil diedit.');
        return redirect()->to('penjualan/tambahSalesOrder/' . $salesOrderId);
    }

    public function simpanBarang($salesOrderId = null)
    {
        $data['salesOrderId'] = $salesOrderId;
        $this->salesOrderBarangModel->save([
            'id_sales_order' => $salesOrderId,
            'kode_barang' => $this->request->getVar('kode_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'ukuran_barang' => $this->request->getVar('ukuran_barang'),
            'satuan_barang' => $this->request->getVar('satuan_barang'),
            'jumlah' => $this->request->getVar('jumlah'),
            'harga_barang' => $this->request->getVar('harga_barang'),
            'total_harga' => $this->request->getVar('total_harga'),
        ]);

        return redirect()->to('penjualan/tambahSalesOrder/' . $salesOrderId);
    }
}
