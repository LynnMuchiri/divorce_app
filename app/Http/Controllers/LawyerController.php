<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Lawyer;


class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyers = Lawyer::select('profile_photo')->get();
        return view('/client/client_dashboard', compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     Lawyer::create($request->all());
    //     return redirect()->route('lawyers')->with('success','Lawyer added successfully');
    // }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        // Add other validation rules here for name, email, password, etc.
         //'profile_photo' => 'image|mimes:jpeg,png,jpg',
    ]);

    $file = $request->file('profile_photo');
    $filePath = $file->store('images');


    Lawyer::create([
    'full_name'=>$request->full_name,
    'profile_photo'=>$filePath,
    'email'=>$request->email,
    'address'=>$request->address,
    'password'=>$request->password, 
    'specialization'=>$request->specialization,	
    'experience'=>$request->experience,
    'license'=>$request->license,
    'phone_number'=>$request->phone_number,
    ]);
    return redirect('/lawyer/lawyer_dashboard');

    
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
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
