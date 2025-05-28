<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable= ['owner_id','name','description'];
    public function data_user(){
        return $this->belongsTo(user::class,'owner_id');
    }

}
