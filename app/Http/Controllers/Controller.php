<?php

namespace App\Http\Controllers;

use App\DbConnection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Laravel\Lumen\Routing\Controller as BaseController;


class Controller extends BaseController
{

    public function __construct()
    {
        
    }

    public function setDatabaseConnection(Request $request){

        // validation code for DB credentials
        $database_credentials = $this->validate($request, [
            'driver' => 'required|string',
            'host' => 'required|string',
            'port' => 'required|string',
            'database' => ['required', 'string', 'unique:db_configurations'],
            'username' => 'required|string',
        ]);

        if ($request->name) {
            Config::set("database.connections.". $request->name, $database_credentials);
        }
        // dd(DbConnection::fin);
            
        // initialize database schemma
        if (!Schema::hasTable($request->database)) {
            DB::connection('mysql_only_connect')->statement("CREATE DATABASE $request->database"); 
        }
        $token = Hash::make(Str::uuid());
        $request->request->add(['token'=>$token]);
        DbConnection::create($request->except(['name', 'id']));
    
        // create response parser here ...
        return response()->json(['message'=>'Success.', 'code' => 200]);
    }

    public function createMigrationScript(){
        $migrator = app('migrator');    
    }

    public function runMigration(){

    }
}
