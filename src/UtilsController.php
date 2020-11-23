<?php

namespace PhpUkg\Collector;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UtilsController extends Controller
{

    public function select(Request $request){
        return [
            'select'=> DB::connection($request->conn)->select($request->option)
        ];
    }
    public function statement(Request $request){
        return [
            'statement'=> DB::connection($request->conn)->statement($request->option)
        ];
    }
    public function getConfig($config){
        return [
            'config'=>config($config)
        ];
    }
    public function test(){
        return [
            'test'=>'test'
        ];
    }

}
