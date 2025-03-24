<?php

namespace App\Http\Controllers;
use App\Models\SoftwareProduct;

use Illuminate\Http\Request;

class SoftwareProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $softwares=SoftwareProduct::all();
        return view('software.index',compact('softwares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('software.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData=$request->validate([
            'name'=>'required',
            'version'=>'required',
            'licencetype'=>'required',
            'price'=>'required'
        ]);
        SoftwareProduct::create($validatedData);
        return redirect()->route('software.index')->with('success','data created successfully.');
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
        $software=SoftwareProduct::findOrFail($id);
        return view('software.show',compact('software'));
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
        $software=SoftwareProduct::findOrFail($id);
        return view('software.edit',compact('software'));
        
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
        $validatedData=$request->validate([
            'name'=>'required',
            'version'=>'required',
            'licence type'=>'required',
            'price'=>'required'
        ]);
    
    SoftwareProduct::whereid($id)->update('validatedData');

    return redirect()->route('software.index')->with('success','data updated successfully.');
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
        $software=software::findOrFail($id);
       $software->delete();
       return redirect()->route('software.index')->with('success','data deleted successfully.');
    }
}
