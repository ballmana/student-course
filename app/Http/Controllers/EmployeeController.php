<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function index()
    {
        return response()->json(Employee::all());
    }


    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->gender = $request->gender;
        $employee->country = $request->country;        
        $employee->save();
        return response()->json($employee);
    }

    public function show(Employee $employee)
    {
        $tasks = $employee->tasks()->get();
        return response()->json(['employee'=>$employee, 'tasks'=>$tasks]);
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->gender = $request->gender;
        $employee->country = $request->country;        
        $employee->save();
        return response()->json($employee);
    }

    public function destroy($id)
    {
        
    }

    public function assignTask(Request $request)
    {
        $employee = Employee::find($request->employee_id);
        $employee->tasks()->attach($request->task_id);
        return response()->json($employee);
    }
}
