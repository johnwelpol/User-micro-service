<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DbConnection extends Model{
    protected $table = "db_configurations";
    protected $guarded = [];
    public $timestamps = false;
}