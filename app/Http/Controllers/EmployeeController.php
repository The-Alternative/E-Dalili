<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee=DB::table('Employee')->get();
        return view('employee.index',['employee'=>$employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
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
            "first_name" => "required",
            "l_name" => "required",
            "age" => "required",
            "sex" => "required",
            "job_title" => "required",
            "certificate" => "required",
            "start_date" => "required",
            "upgrade" => "required",
            "salary" => "required",
         ]);
         //Employee::create( $request->all() );
      
         Employee::create([
            'role_id'        => $request->role_id,
            'first_name'        => $request->fname,
            'l_name' => $request->lname,
            'age' => $request->age,
            'sex' => $request->sex,
            'image'       => $request->image->store('images','public'),
            'job_title' => $request->job_title,
            'certificate' => $request->certificate,
            'start_date' => $request->start_date,
            'upgrade' => $request->upgrade,
            'salary' => $request->salary

        ]);

   

       /* $employee=new Employee;
        $employee->role_id= $request->role_id;
        $employee->first_name = $request->fname;
        $employee->l_name = $request->lname;
        $employee->age = $request->age;
        $employee->sex = $request->sex;
        $employee->image = $request->image;
        $employee->job_title = $request->job_title;
        $employee->certificate= $request->certificate;
        $employee->start_date= $request->start_date;
        $employee->upgrade= $request->upgrade;
        $employee->salary= $request->salary;*/
        $employee->save();
        session()->flash('success','Employee created successfuly');
        return view('employee.index');
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
