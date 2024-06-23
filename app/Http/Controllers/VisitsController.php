<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visits;
use App\DTO\VisitDTO;
use App\Repository\Interface\IVisitRepository;
use App\Http\Requests\CreateVisit;




class VisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visits = Visits::all();

        return view('visits.showvisit', ['visits' => $visits]);
    }

    /**
     * Show the form for creating a new resource.
     */
        protected $visitRepository;

        public function __construct(IVisitRepository $visitRepository){
            $this->visitRepository = $visitRepository;
        }
        public function create(CreateVisit $createvisit){
    
            $visitDTO = VisitDTO::from($createvisit->all());
            $visit = $this->visitRepository->createvisit($visitDTO);


        return view('visits.createvisit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Visits::create([
    
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
