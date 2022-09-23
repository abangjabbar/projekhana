<?php

namespace App\Models;

use CodeIgniter\Model;

class HargaJualModel extends Model
{
    protected $table = 'harga_jual';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'no_perhitungan',
        'tanggal',
        'customer',
        'type_box',
        'nama_box',
        'ukuran_box',
        'bahan',
        'ukuran_bahan',
        'diskon_bahan',
        'biaya_bahan',
        'quantity_order',
        'biaya_lain',
        'total_biaya',
        'alamat_kantor',
        'profit',
        'estimas_harga',
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
