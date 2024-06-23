<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class PharmaDTO extends Data {

    public function __construct(public string $treatment)
    {
        

    }

}

