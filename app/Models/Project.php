<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded =[];

    //Employee table relation
    public function clients()
    {
        return $this->belongsTo(Employees::class,'clientId', 'userId');
    }
}
