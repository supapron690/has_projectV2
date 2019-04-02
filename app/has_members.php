<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class has_members extends Model
{
    protected $table = 'has_members';
    protected $fillable = ['mem_account','mem_username','mem_phone','mem_password'];
}
