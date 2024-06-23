<?php

namespace App\Repository;
use App\DTO\VisitDTO;
use App\Models\Visits;
use App\Repository\Interface\ IVisitRepository;

class VisitRepository implements IVisitRepository {

    public function createVisit(VisitDTO $visitDTO) : bool
    {
        
        if (Visits::create($visitDTO->toArray())) {

            return true;
        }
return false;
}



}

