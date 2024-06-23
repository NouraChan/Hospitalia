<?php

namespace App\Repository\Interface;
use App\DTO\DepartmentDTO;


interface IDepartmentRepository {

    public function createDepartment(DepartmentDTO $departmentDTO): bool;


}

