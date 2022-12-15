<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table    = 'entity__users';
    protected $allowedFields    = ['username', 'fullname', 'image', 'role'];
}
