<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Session;
use Auth;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = Auth::user()->name;
        $data = Crud::all();
        return view('crud.index', compact('data'))->with('username', $username);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $username = Auth::user()->name;
        return view('crud.create')->with('username', $username);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'personName' => 'required|alpha_dash:ascii',
            'dob' => 'required|date',
            'image' => 'required|nullable|image|mimes:jpeg,jpg,png,gif'
        ]);

        $data = $request->all();

        $from = new \DateTime($data['dob']);
        $to   = new \DateTime('today');
        $age  = $from->diff($to)->y;

        $filename = "";
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = 'image-' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('images', $filename);
        }        

        Crud::create([
            'name' => $data['personName'],
            'dob' => $data['dob'],
            'age' => $age,
            'image' => $path            
        ]);

        return redirect('/crud/create')->withSuccess('Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
