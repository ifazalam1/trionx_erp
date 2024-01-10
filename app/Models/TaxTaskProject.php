<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxTaskProject extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function admin(){
    	return $this->belongsTo(Admin::class,'assign_to','id');
    }

    public function user(){
    	return $this->belongsTo(Admin::class,'assigned_by','id');
    }
}
