<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table    = 'entity__roles';
    protected $allowedFields = ['name', 'desc'];
}
