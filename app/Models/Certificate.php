<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable=[
        'UserId',
        'IssuedDate',
    ];

    public function get_User_id(){
        return $this->hasMany('App\Models\User','UserId');
    }
}
