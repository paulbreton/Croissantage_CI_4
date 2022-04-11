<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rigths extends Model
{
    // Le nom de la table MySQL
    protected $table = 'Rights';

    protected $returnType = '\App\Entities\Rigths';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'id',
        'idS',
        'role'
    ];

}
