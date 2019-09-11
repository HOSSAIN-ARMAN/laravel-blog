<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['first_name', 'last_name'];

    public static function addTestInfo($request){
        Test::create($request->all());
    }
}
