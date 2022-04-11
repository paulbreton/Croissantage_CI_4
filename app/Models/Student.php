<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Le nom de la table MySQL
    protected $table = 'Student';

    public function role()
    {
        return Rigths::where('idS', 1)->get();
    }

    protected $returnType = '\App\Entities\Student';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'id', 'login', 'alias', 'defaultPastry'
    ];

}
