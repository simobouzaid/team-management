<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task_user extends Model
{
    protected $fillable = ['task_id', 'user_id'];
    public function data_User()
    {
      return $this->belongsTo(user::class ,'user_id');
    }
    public function data_task(){
        return $this->belongsTo(task::class,'task_id');
    }
    public function data_commment(){
        return $this->hasMany(comment::class);
    }
}
