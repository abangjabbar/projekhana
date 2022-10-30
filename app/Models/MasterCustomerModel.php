<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterCustomerModel extends Model
{
    protected $table = 'master_customer';
    protected $primaryKey = 'customer_id';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'kode_customer',
        'nama_customer',
        'kontak_customer',
        'jabatan',
        'no_hp',
        'no_telp',
        'fax',
        'email_customer',
        'sales',
        'waktu_pembayaran',
        'limit_kredit',
        'berikat',
        'npwp',
        'ktp',
        'alamat_kantor',
        'kota_customer',
        'provinsi_customer',
        'kode_pos',
        'alamat_kirim1',
        'kontak_kirim1',
        'alamat_kirim2',
        'kontak_kirim2'
    ];
}
