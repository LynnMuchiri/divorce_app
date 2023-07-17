<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function upload(){
        return view('client.upload');
   }

   public function uploadFile(Request $request){

        // Validation
        
        $request->validate([
              'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
        ]);

        if($request->file('file')) {
              $file = $request->file('file');
              $filename = time().'_'.$file->getClientOriginalName();

              // File upload location
              $location = 'uploads';

              // Upload file
              $file->move($location,$filename);

              Session::flash('message','Upload Successfully.');
              Session::flash('alert-class', 'alert-success');
        }else{
              Session::flash('message','File not uploaded.');
              Session::flash('alert-class', 'alert-danger');
        }
        return redirect()->route('client_dashboard')->with('success','Document uploaded successfully');
    }
}
