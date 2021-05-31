<?php

namespace App\Models;

use CodeIgniter\Model;

class AircraftModel extends Model
{
    protected $table = 'aircrafts';

    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $allowedFields = ['model', 'brand', 'type', 'numberOfEngines'];
    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';
}
