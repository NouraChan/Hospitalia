<?php

namespace App\Repository;
use App\DTO\DepartmentDTO;
use App\Models\Department;
use App\Repository\Interface\ IDepartmentRepository;

class DepartmentRepository implements IDepartmentRepository {

    public function createDepartment(DepartmentDTO $departmentDTO) : bool
    {
        
        if (Department::create($departmentDTO->toArray())) {

            return true;
        }
return false;
}}


