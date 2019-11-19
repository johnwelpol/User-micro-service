<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function setDatabaseConnection(Request $request){
        // validation code here ...
        $this->validate($request, [
            'driver' => 'required|string',
            'host' => 'required|string',
            'port' => 'required|string',
            'database' => ['required', 'string', 'unique:db_configurations'],
            'username' => 'required|string',
        ]);

        // initialize database schemma
        DB::connection('mysql_only_connect')->statement("CREATE DATABASE testing");
        
        // model code here ..
        DbConnection::insert($request);

        // create token when finish the settings of the database connection
        $token = Hash::make(Str::uuid());

        // create response parser here ...
        
        return ;
    }

    public function createMigrationScript(){

    }


    public function runMigration(){

    }
}
