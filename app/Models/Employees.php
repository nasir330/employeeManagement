<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $guarded = [];

      //table relation with Department
      public function departments() {
        return $this->belongsTo(Department::class, 'department', 'id');
    }
}