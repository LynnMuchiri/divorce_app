<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use App\Models\Client;

class AdminController extends Controller
{
    public function viewLawyers()
    {
        $lawyer = Lawyer::orderBy('created_at', 'DESC')->get();
        return view('admin.lawyer.index',compact('lawyer'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lawyer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lawyer::create($request->all());
        return redirect()->route('lawyers')->with('success','Lawyer added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lawyer = Lawyer::findorFail($id);

        return view('admin.lawyer.show', compact('lawyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lawyer = Lawyer::findorFail($id);

        return view('admin.lawyer.edit', compact('lawyer'));
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
          $lawyer = Lawyer::findorFail($id);

          $lawyer->update($request->all());

          return redirect()->route('lawyers')->with('success','Lawyer updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lawyer = Lawyer::findorFail($id);

        $lawyer->delete();

        return redirect()->route('lawyers')->with('success','Lawyer deleted successfully');

}

public function viewClients()
{
    $client = Client::orderBy('created_at', 'DESC')->get();
    return view('client.index',compact('client'));
}

public function createClient()
{
    return view('admin.clients.create');
}

public function storeClient(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        // Add more validation rules as needed
    ]);
    Client::create($validatedData);

        return redirect()->route('admin.clients.index')->with('success', 'Client created successfully.');
    }

    public function editClient(Client $client)
    {
        return view('admin.clients.edit', ['client' => $client]);
    }

    public function updateClient(Request $request, Client $client)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // Add more validation rules as needed
        ]);

        // Update the client using the validated data
        $client->update($validatedData);

        return redirect()->route('admin.clients.index')->with('success', 'Client updated successfully.');
    }
    public function destroyClient(Client $client)
    {
        $client->delete();

        return redirect()->route('admin.clients.index')->with('success', 'Client deleted successfully.');
    }

}
        