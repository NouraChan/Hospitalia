<?php

namespace App\Repository;
use App\DTO\SurgeryDTO;
use App\Models\Surgery;
use App\Repository\Interface\ ISurgeryRepository;

class SurgeryRepository implements ISurgeryRepository {
    public function createSurgery(SurgeryDTO $surgeryDTO) : bool
    {
        
        if (Surgery::create($surgeryDTO->toArray())) {

            return true;
        }
return false;
}}


