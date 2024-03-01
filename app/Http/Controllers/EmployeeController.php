<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $Employees = Employee::all(); //get all data from database
        return view('employee.index', ['Employees' => $Employees]); //send data to view

    }

    public function create(){
        return view('employee.create');
    }

    public function record(Request $request){ //saving data to database
        $data = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'position' => 'required',
            'birthdate' => 'required|date',
            'salary' => 'required|decimal:0,2',
        ]);

        $newEmployee = Employee::create($data);

        return redirect('/Employee');
    }

    public function edit(Employee $Employee){
        return view('employee.edit', ['Employee' => $Employee]);
    }

    public function update(Employee $Employee, Request $request){
        $data = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'position' => 'required',
            'birthdate' => 'required|date',
            'salary' => 'required|decimal:0,2',
        ]);

        $Employee->update($data);
        
        session()->flash('success', 'Employee Edit Successfully!');
        return redirect('/Employee');

    }

    public function delete(Employee $Employee){
        $Employee->delete();
        return redirect('/Employee')->with('success', 'Employee deleted successfully');
    }
}
