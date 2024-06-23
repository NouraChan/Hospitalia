<?php

namespace App\Repository\Interface;
use App\DTO\VisitDTO;


interface IVisitRepository {

    public function createVisit(VisitDTO $visitDTO): bool;

}

