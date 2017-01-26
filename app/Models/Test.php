<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $table = 'qazopyu';
    protected $primaryKey = 'MY_ID';
    public $timestamps = false;

    //public $fillable = ['name', 'age', 'surname'];
    public $guarded = ['id', 'created_at', 'updated_at'];
}
