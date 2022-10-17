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

    public function update_sales_order($input)
    {
        $data = [
            "nomor_so" => $input->post('nomor_so'),
            "tanggal_so" => $input->post('tanggal_so'),
            "tanggal_kirim" => $input->post('tanggal_kirim'),
            "alamat_kirim" => $input->post('alamat_kirim'),
            "keterangan" => $input->post('keterangan'),
            "nomor_po" => $input->post('nomor_po'),
            "tanggal_po" => $input->post('tanggal_po'),
            "id_customer" => $input->post('id_customer'),
            "id_sales" => $input->post('id_sales'),
            "ppn" => $input->post('ppn'),
            "top" => $input->post('top'),
        ];
        $this->builder->where('sales_order.sales_order_id', $input->post('salesOrderId'));
        $this->builder->update($data);
    }

    public function getAll()
    {
        $builder = $this->db->table('master_customer');
        $builder->select('*');
        $builder->join('master_sales', 'master_sales.sales_id = master_customer.sales');
        $query = $builder->get();
        return $query->getResult();
    }
}
