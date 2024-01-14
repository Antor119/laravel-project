<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospital;
use App\Models\user;
use App\Models\MedicalModel;
use App\Models\ServiceModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    public function dashboard(){
        // $medical = MedicalModel::all();
        return view('pages.master');
    }

    public function about(){

        return view('pages.about');
    }





    public function appointment(){
        return view('pages.appointment');
    }
public function contact(){
    return view('pages.contact');
}

    public function home(){
        $medical = MedicalModel::all();


        return view('pages.home',['key'=>$medical]);
    }

    public function service(){
        $service = serviceModel::all();
        return view('pages.service',['key'=>$service]);
    }

    public function login(){
        return view('pages.login');
    }

    public function signup(){
        return view('pages.signup');
    }

    public function datainsert(){
        $data['name']='Mahadi hassan antor';
        $data['email']='mhantor34@gmail.com';
        $data['password']= 45234;

         hospital::insert($data);

        // dd($data);

    }

    public function signupdata(Request $request){
        // dd($request->all());

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);

        User::insert($data);
        return redirect()->route('login');

    }

    public function logindata(Request $request)
    {
        // dd($request->all());

        $validData=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);

        if($validData) {
            return redirect()->route('pages.master');
        }
        return redirect()->route('login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function doctor(){
        $medical1 = MedicalModel::all();
        return view('pages.doctor',['key'=>$medical1]);
    }

    public function portoflio($id){
        $service2 = ServiceModel::find($id);
        return view('pages.portfolio-details', ['key'=>$service2]);
    }

}


