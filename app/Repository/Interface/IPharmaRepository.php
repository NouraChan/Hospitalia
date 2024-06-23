<?php

namespace App\Repository\Interface;
use App\DTO\PharmaDTO;


interface IPharmaRepository {

    public function createPharma(PharmaDTO $pharmaDTO): bool;

}

