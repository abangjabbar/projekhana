<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterSupplierModel extends Model
{
    protected $table = 'master_supplier';
    protected $primaryKey = 'master_supplier_id';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kode_supplier',
        'nama_supplier',
        'kontak',
        'jabatan',
        'no_hp',
        'telp',
        'fax',
        'email',
        'waktu_pembayaran',
        'npwp',
        'alamat_kantor',
        'kota',
        'provinsi',
        'kode_pos',
        'keterangan'
    ];

    function search_kode($kodeSupplier)
    {
        $builder = $this->db->table('master_supplier', $kodeSupplier);
        $builder->like('kode_supplier');
        $builder->orderBy('kode_supplier', 'ASC');
        // $builder->limit(2);
        $query = $builder->get();
        return $query->getResult();
    }
}
