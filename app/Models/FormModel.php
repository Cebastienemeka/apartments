<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $DBGroup   = 'default';
    protected $table      = 'form';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;
    protected $allowedFields = [
        // 'id', 
        'firstname',
        'lastname',
        'email',
        'message',
    ];
}
