<?php

namespace App\Models;

use CodeIgniter\Model;

class PenawaranHargaModel extends Model
{
    protected $table = 'penawaran_harga';
    protected $primaryKey = 'penawaran_harga_id';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'no_txn',
        'customer',
        'alamat',
        'tanggal',
        'revisi',
        'ditujukan',
        'keterangan'
    ];
}
