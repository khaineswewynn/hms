<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depts=Department::all();
        //dd($depts);
        return view('department.index',["depts"=>$depts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("department.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //validation errors
        $request->validate(
            [
               'name'=>'required',
               'description'=>'required',
               'phone'=>'required',
               'location'=>'required' 
            ],
            [
               'name.required'=>"Please enter dept name",
               'description.required'=>'please enter description',
               'phone.required'=>'Please enter phone number',
               'location.required'=>'Please enter location' 
            ]
            );

            Department::create($request->except('_token'));
            return redirect()->route('department.index');
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
        $dept=Department::find($id);
        return view('department.view',['dept'=>$dept]);
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
        $dept=Department::find($id);
        //dd($dept);
        return view('department.edit',['dept'=>$dept]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        //
        $dept=Department::find($id);
        $request->validate(
            [
               'name'=>'required',
               'description'=>'required',
               'phone'=>'required',
               'location'=>'required' 
            ],
            [
               'name.required'=>"Please enter dept name",
               'description.required'=>'please enter description',
               'phone.required'=>'Please enter phone number',
               'location.required'=>'Please enter location' 
            ]
            );

            $dept->update($request->except('_token'));
            return redirect()->route('department.index');
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
        Department::destroy($id);
        return redirect()->route('department.index');
    }
}
