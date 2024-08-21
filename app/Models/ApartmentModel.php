<?php

namespace App\Models;

use CodeIgniter\Model;

class ApartmentModel extends Model
{
    protected $DBGroup   = 'default';
    protected $table      = 'apartment';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = [
        'apartment_id',
        'type',
        'location',
        'price',
        'description',
        'image',
        'status',
        'bed',
        'bathroom',
        'toilet',
    ];

    public function search($keyword = null, $propertyType = null, $location = null)
    {
        $builder = $this->table($this->table);

        if ($keyword) {
            $builder->like('description', $keyword);
        }

        if ($propertyType) {
            $builder->where('type', $propertyType);
        }

        if ($location) {
            $builder->like('location', $location);
        }

        // Using this SQL structure to match your successful query
        if ($propertyType || $location || $keyword) {
            return $builder->get()->getResultArray();
        }

        return []; // Return an empty array if no search criteria are provided
    }
}
