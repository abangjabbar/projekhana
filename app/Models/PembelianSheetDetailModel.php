<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianSheetDetailModel extends Model
{
    protected $table = 'pembelian_sheet_detail';
    protected $primaryKey = 'pembelian_sheet_detail_id';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'id_pembelian_sheet',
        'qty_pakai',
        'sheet_pakai',
        'substance',
        'out_sheet',
        'waste',
        'sheet_beli',
        'harga_dasar',
        'qty_order',
        'discount',
        'harga_out',
        'harga_exclude_ppn',
        'harga_total',
        'tgl_kirim',
        'creasing'
    ];

    public function getPembelianSheetDetail($pembelianSheetId)
    {
        $builder = $this->db->table('pembelian_sheet_detail');
        $builder->where('pembelian_sheet_detail.id_pembelian_sheet', $pembelianSheetId);
        $query = $builder->get();
        return $query->getResult();
    }
}
