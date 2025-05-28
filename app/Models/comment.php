<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable =[  'task_id','user_id','content'];
      public function data_User()
    {
      return $this->belongsTo(user::class ,'user_id');
    }
    public function data_task(){
        return $this->belongsTo(task::class,'task_id');
    }



}
