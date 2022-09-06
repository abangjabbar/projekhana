<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterCustomerModel extends Model
{
    protected $table = 'master_customer';
    protected $primaryKey = 'customer_id';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'kode_customer',
        'nama',
        'kontak',
        'jabatan',
        'no_hp',
        'telp',
        'fax',
        'email',
        'sales',
        'waktu_pembayaran',
        'limit_kredit',
        'berikat',
        'npwp',
        'ktp',
        'alamat_kantor',
        'kota',
        'provinsi',
        'kode_pos',
        'alamat_kirim1',
        'kontak_kirim1',
        'alamat_kirim2',
        'kontak_kirim2'
    ];

    public function getAll()
    {
        $builder = $this->db->table('master_customer');
        $builder->select('*');
        $builder->join('master_sales', 'master_sales.sales_id = master_customer.sales');
        $query = $builder->get();
        return $query->getResult();
    }
}
