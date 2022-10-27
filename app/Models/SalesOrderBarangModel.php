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
}
