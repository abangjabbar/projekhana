<?php

namespace App\Controllers;

use App\Models\PembelianSheetModel;
use App\Models\MasterSupplierModel;

class Manager extends BaseController
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
            'title' => 'Manager',
            'pembelianSheet' => $pembelianSheet
        ];

        echo view('manager/index', $data);
    }

    public function detail($id = 0)
    {
        $data['title'] = 'User Detail';

        $this->builder->select('users.id as userid, username, email, fullname, userimage, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }
}
