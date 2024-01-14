<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;

class ServiceController extends Controller
{
    public function index2(){
        $service2 = ServiceModel::all();
        return view('service.index', ['key'=>$service2]);
    }

    public function create1(){
        return view('service.create');
    }

    public function servicecreate(Request $service){

        // dd($service->all());

        $data['title']=$service->title;
        $data['description']=$service->description;

        ServiceModel::insert($data);
        return redirect()->route('service.index');

    }

    public function delete1($id){
        $data= ServiceModel::where('id', $id);
        $data->delete();
        return redirect()->route('service.index');
     }





}
