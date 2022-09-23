<?php

namespace App\Models;

use CodeIgniter\Model;

class ParameterBiayaModel extends Model
{
    protected $table = 'parameter_biaya';
    protected $primaryKey = 'parameter_biaya_id';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kode',
        'nama',
        'type'
    ];
}
