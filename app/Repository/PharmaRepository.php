<?php

namespace App\Repository;
use App\DTO\PharmaDTO;
use App\Models\Pharmacy;
use App\Repository\Interface\ IPharmaRepository;

class PharmaRepository implements IPharmaRepository {
    public function createPharma(PharmaDTO $pharmaDTO) : bool
    {
        
        if (Pharmacy::create($pharmaDTO->toArray())) {

            return true;
        }
return false;
}}


