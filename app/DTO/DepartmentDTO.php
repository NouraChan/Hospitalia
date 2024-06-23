<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class DepartmentDTO extends Data {

    public function __construct(
        public string $title ,
        public string $description,
    )
    {
    }

}

