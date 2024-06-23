<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\DTO\DepartmentDTO;
use App\Repository\Interface\IDepartmentRepository;
use App\Http\Requests\CreateDepartment;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();

        return view('departments.showdepartment', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     */   protected $departmentRepository;

    public function __construct(IDepartmentRepository $departmentRepository){
        $this->departmentRepository = $departmentRepository;
    }
    public function create(CreateDepartment $createdepartment){

        $departmentDTO = DepartmentDTO::from($createdepartment->all());
        $department = $this->departmentRepository->createdepartment($departmentDTO);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Department::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = Department::findOrFail($id);
        return view('departments.editdepartment', ['department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $department = Department::findOrFail($id);
        $department->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->back();
    }
}
