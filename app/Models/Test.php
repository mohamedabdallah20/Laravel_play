<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = [
        'name',
        'content',
        'status',
        'photo',
        'show',
        'user_id'
    ];

    public function getNameAttribute($value){

        return strtoupper($value);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
