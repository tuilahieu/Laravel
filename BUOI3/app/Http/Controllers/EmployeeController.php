<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        // Employee::create([
        //     'name' => 'Tran van hieu',
        //     'email' => 'hieutran18204@gmail.com',
        //     'position' => 'Dev'
        // ]);

        // $employees = Employee::all();
        $employees = Employee::paginate(1);
        return view('employees.index', compact('employees'));

    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Thêm nhân viên thành công!');;
    }



}
