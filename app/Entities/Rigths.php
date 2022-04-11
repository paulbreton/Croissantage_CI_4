<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Rigths extends Entity
{
    protected $id;
    protected $role;

    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
}
