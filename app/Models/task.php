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
    public function data_USER (){
        return $this->belongsToMany(User::class);
    }
    public function data_comment(){
        return $this->hasMany(Comment::class);
    }
}
