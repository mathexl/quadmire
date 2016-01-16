<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //
    protected $table = 'colleges';
    protected $primaryKey = 'id';
    protected $fillable = ["name","population","cover","location","active"];

}
