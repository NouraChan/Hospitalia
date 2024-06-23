<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class VisitDTO extends Data {

    public function __construct(public string $time)

    {

    }

}

