<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesOrderBarangModel extends Model
{
    protected $table = 'sales_order_barang';
    protected $primaryKey = 'sales_order_barang_id';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'id_sales_order',
        'kode_barang',
        'nama_barang',
        'ukuran_barang',
        'satuan_barang',
        'jumlah',
        'harga_barang',
        'total_harga'
    ];

    public function getSalesOrderBarang($salesOrderId)
    {
        $builder = $this->db->table('sales_order_barang');
        $query = $builder->where('sales_order_barang.id_sales_order', $salesOrderId);
        $query = $builder->get();
        return $query->getResult();
    }
}
