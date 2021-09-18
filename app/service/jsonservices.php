<?php
namespace App\service;

use App\Models\JsonController;
use GuzzleHttp\Psr7\Request;

Class jsonservices{
    public function JsonServiceStore($request){
        $data = ['success' => false, 'data' => [], 'msg' => 'Something is wrong!'];

        $result = JsonController::create($request);

        if($result) {
            $data['success'] = true;
            $data['data'] = $result;
            $data['msg'] = 'Successfully created!';
        }

        return $data;
    }

    public function JsonServiceUpdate($request, $id){
    $dt = ['success' => false, 'data' => [], 'msg' => __('Something went wrong!')];
    $update = JsonController::where('id', $id)->update([
        'emp_id' => $request->emp_id,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'title' => $request->title,
        'salary' => $request->salary,
    ]);
    if($update) {
        $dt['success'] = true;
        $dt['msg'] = __('Successfully Updated!');
    }
    return $dt;
 }

}

