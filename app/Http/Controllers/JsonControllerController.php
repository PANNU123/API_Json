<?php

namespace App\Http\Controllers;

use App\Models\JsonController;
use Illuminate\Http\Request;
use App\service\jsonservices;
use Illuminate\Support\Facades\Response;

class JsonControllerController extends Controller
{
    public function create(Request $request,jsonservices $jsonService){

        $input = $request->all();
        $result=$jsonService->JsonServiceStore($input);
        
        // $json=new JsonController();
        // $json->emp_id=$request->input('emp_id');
        // $json->first_name=$request->input('first_name');
        // $json->last_name=$request->input('last_name');
        // $json->title=$request->input('title');
        // $json->salary=$request->input('salary');
        // $json->save();

        return response()->json($result);
    }
    public function read(){
        $json=JsonController::all();
        return response()->json($json);
    }

    public function showid($id){
        $json=JsonController::find($id);
        return response()->json($json);
    }

    public function update(Request $request, $id, jsonservices $jsonService)
    {
        
            $input = $request->all();
            $result=$jsonService->JsonServiceUpdate($request, $id);
            if($result['success'] == true) {
                return response()->json($result);
            }
            return $result['msg'];
    }
    
     public function delete($id){
        $json=JsonController::find($id);
        $json->delete();
        return response()->json($json);
     }
}
