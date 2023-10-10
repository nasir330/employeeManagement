<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkLog extends Model
{
    use HasFactory;

    protected $guarded = [];

     //Table relation with project
     public function projects()
     {
         return $this->belongsTo(Project::class,'projectId', 'id');
     }
     //Table relation with client
     public function clients()
     {
         return $this->belongsTo(Clients::class,'clientId', 'userId');
     }
}