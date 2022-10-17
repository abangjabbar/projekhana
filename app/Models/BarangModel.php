<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'barang_id';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'kode',
        'nama',
        'ukuran',
        'satuan',
    ];

    public function get()
    {
        $builder = $this->db->table('barang');
        $query = $builder->get();
        return $query->getResult();
    }
}
