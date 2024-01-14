<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalModel;
use App\Models\ContactModel;
use App\Illuminate\Support\Facades\Mail;
use App\Mail\contactformmail;

class DoctorController extends Controller
{
    public function index(){
        $medical = MedicalModel::all();

        // dd($medical);
        return view('pages.index', ['key'=>$medical]);

    }

    public function create(){
        return view('doctor.create');
    }

    public function doctorCreate(Request $doctor){
        // dd($doctor->all());


        if($doctor->image)
       {
           if(!file_exists(public_path('images')))
           {
            mkdir(public_path('images'),0777,true);
           }
           $image=$doctor->image;

           $name=$image->getClientOriginalName();
           $destination=public_path('images');
           $imageName=time().'_'.$name;
           $image->move($destination,$imageName);

           $data['image']='images/'.$imageName;
       }


        $data['name']=$doctor->name;
        $data['title']=$doctor->title;
        $data['description']=$doctor->description;

        MedicalModel::insert($data);
         return redirect()->route('pages.index');

    }

    public function delete($id){
        $data= MedicalModel::where('id', $id);
        $data->delete();
        return redirect()->route('pages.index');
     }

    // public function message(){
    //     $contact_form_data = request()->all();
    //     Mail::to('mhantor722@gmail.com')->send(new ContactFormMail($contact_form_data));


        // $data['name']=$message->name;
        // $data['email']=$message->email;
        // $data['subject']=$message->subject;
        // $data['message']=$message->message;

        // ContactModel::insert($data);
        // return redirect()->route('pages.index');
        // Request $message




    // }

    public function index1(){


        $message = ContactModel::all();
        return view('contact.index', ['key'=>$message]);
    }

//     public function delete($id){
//         $data=  ContactModel::where('id', $id);
//         $data->delete();
//         return redirect()->route('contact.index');
// }

// public function edit($id){
//     $edit =   MedicalModel::find($id);
//     return view('doctor.edit', compact('edit'));
//  }

//  public function update(Request $request, $id){


//     if( $request->image)
//     {
//         if(!file_exists(public_path('images')))
//         {
//          mkdir(public_path('images'),0777,true);
//         }
//         $image= $request->image;

//         $name=$image->getClientOriginalName();
//         $destination=public_path('images');
//         $imageName=time().'_'.$name;
//         $image->move($destination,$imageName);

//         $data['image']='images/'.$imageName;
//     }

//     $edit =  MedicalModel::find($id);

//     $edit->image = $request->image;

//     $edit->name = $request->name;
//     $edit->title = $request->title;
//     $edit->description = $request->description;
//     $edit->save();

//     return redirect()->route('pages.index')->with('success', ' service update successfully');
//  }

public function home1(){
    $medical = MedicalModel::all();
    return view('pages.home',['key'=>$medical]);
}
}
