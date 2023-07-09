<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $guarded = [];

     //table relation with Departments
     public function departments() {
        return $this->belongsTo(Department::class, 'departmentId', 'id');
    }
}
