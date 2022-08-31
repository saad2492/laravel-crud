<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("frontend.manageemployee");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $emp = new Employee;
       $emp->fName = $request->fName;
       $emp->lName = $request->lName;
       $emp->address = $request->address;
       $emp->phone = $request->phone;
       $emp->email = $request->email;
       $emp->status = $request->status;
       $emp->save();
       if($emp){
            return response()->json([
                "msg" => 'success'
            ]);
       }
       else{
        return response()->json([
            "msg" => '104'
        ]);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $allData = Employee::all();
       if($allData){
        return response()->json([
            "status" => 'success',
            "alldata" => $allData
        ]);
       }
       else{
        return response()->json([
            "status" => '404',
        ]);
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allData = Employee::find($id);
       if($allData){
        return response()->json([
            "status" => 'success',
            "alldata" => $allData
        ]);
       }
       else{
        return response()->json([
            "status" => '404',
        ]);
       }
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
        $emp = Employee::find($id);
        $emp->fName = $request->fName;
        $emp->lName = $request->lName;
        $emp->address = $request->address;
        $emp->phone = $request->phone;
        $emp->email = $request->email;
        $emp->status = $request->status;
        $emp->update();
        if($emp){
             return response()->json([
                 "msg" => 'success'
             ]);
        }
        else{
         return response()->json([
             "msg" => '104'
         ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allData = Employee::find($id);
        $allData->delete();
       if($allData){
        return response()->json([
            "status" => 'success'
        ]);
       }
       else{
        return response()->json([
            "status" => '404',
        ]);
       } 
    }
}
