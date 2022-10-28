<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesOrderModel extends Model
{
    protected $table = 'sales_order';
    protected $primaryKey = 'sales_order_id';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'nomor_so',
        'tanggal_so',
        'tanggal_kirim',
        'tanggal_po',
        'nomor_po',
        'id_customer',
        'id_sales',
        'top',
        'ppn',
        'alamat_kirim',
        'keterangan',
        'barang_id',
        'kode_barang',
        'nama_barang',
        'ukuran_barang',
        'jumlah',
        'harga',
        'harga_ppn',
        'harga_total',
        'transporter',
        'tujuan',
        'status',
    ];

    public function getSalesOrder($salesOrderId)
    {
        $builder = $this->db->table('sales_order');
        $query = $builder->where('sales_order.sales_order_id', $salesOrderId);
        $query = $builder->get();
        return $query->getResult();
    }
}
