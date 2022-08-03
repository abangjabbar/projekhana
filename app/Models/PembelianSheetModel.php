<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianSheetModel extends Model
{
    protected $table = 'pembelian_sheet';
    protected $primaryKey = 'pembelian_sheet_id';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'nomor_po',
        'tgl_buat',
        'tgl_kirim',
        'kode_supplier',
        'nama_supplier',
        'waktu_pembayaran',
        'ppn',
        'peruntukan',
        'kode_harga',
        'discount',
        'keterangan_pembelian'
    ];

    public function getAll()
    {
        $builder = $this->db->table('master_box');
        // $builder->select('hitung_harga.*, master_sheet.substance');
        $builder->join('master_sheet', 'master_sheet.master_sheet_id = master_box.sheet', 'LEFT');
        $builder->orderBy('master_box_id', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }
}
