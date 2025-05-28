<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{

    protected $fillable=[
        'project_id',
        'title',
        'description',
        'status',
        'due_date'
    ];
    public function  data_project(){
        return $this->belongsTo(project::class,'project_id');
    }
}
