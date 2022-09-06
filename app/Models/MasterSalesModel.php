<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterSalesModel extends Model
{
    protected $table = 'master_sales';
    protected $primaryKey = 'sales_id';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kode_sales',
        'nama_sales',
        'slug',
        'type',
        'telp_sales',
        'alamat_sales',
        'kota_sales',
        'provinsi_sales',
        'keterangan'
    ];
}
