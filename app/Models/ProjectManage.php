<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectManage extends Model
{
    use HasFactory;
    
    protected $guarded =[];

    //Employee table relation
    public function employees()
    {
        return $this->belongsTo(Employees::class,'employeeId', 'userId');
    }
    //Project table relation
    public function projects()
    {
        return $this->belongsTo(Project::class,'projectId', 'id');
    }
}
