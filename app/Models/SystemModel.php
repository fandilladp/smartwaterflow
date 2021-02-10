<?php namespace App\Models;

use CodeIgniter\Model;

class SystemModel extends Model
{
    protected $table = 'system';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'token', 'debitair','servo_low', 'servo_normal', 'servo_labor', 'created_date', 'updated_date'
    ];

}
