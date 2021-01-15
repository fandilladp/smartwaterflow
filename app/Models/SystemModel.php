<?php namespace App\Models;

use CodeIgniter\Model;

class SystemModel extends Model
{
    protected $table = 'system';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'token', 'discharge', 'temperature', 'humidity', 'servo_low', 'servo_medium', 'servo_high', 'created_date', 'updated_date'
    ];

    protected $returnType      = 'App\Entities\System';
    protected $usingTimestamps = false;

}
