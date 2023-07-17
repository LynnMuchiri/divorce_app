<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Lawyer;
use Illuminate\Support\Facades\Storage;



class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyers = Lawyer::all(); // Assuming you have a Lawyer model and want to fetch all lawyers
        return view('/client/client_dashboard', compact('lawyers'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // ...
     
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             // Add validation rules for other fields
            //   'documents' => 'nullable|file|mimes:pdf,doc,docx', // Add validation rule for the document
         ]);
     
         $file = $request->file('documents');
         $filePath = $file->store('uploads');

         // Create the client record
         Client::create([
            'full_name'=>$request->full_name,
             'email'=>$request->email , 
             'password'=>$request->password, 
             'phone_number'=>$request->phone_number,
              'address'=>$request->address,
               'documents'=>$filePath,
         ]);
     
         return redirect('/client/client_dashboard');
     }
     
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  // ClientController.php

    public function show($id)
            {
                // $lawyers = Lawyer::all(); // Assuming you have a "Lawyer" model and want to retrieve all lawyers
                // return view('/client/client_dashboard', compact('lawyers'));
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

}
}