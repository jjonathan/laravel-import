<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class FileController extends Controller
{

    public function import(Request $request){
    	$path = storage_path('json');
        $name = $request->file('json')->getClientOriginalName() . '-' . uniqid();
    	$request->file('json')->move($path, $name);
        $data = $this->getData($name);
        print_r($data);
    }

    public function getData($name){
    	if ($name != "" && empty($name)) {
    		return false;
    	}
    	$data = [];
    	$path = storage_path('json') . '/' .$name;
    	$content = File::get($path);
    	$content = json_decode($content);
    	return $content;
    }
}