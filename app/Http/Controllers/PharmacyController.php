<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;
use App\DTO\PharmaDTO;
use App\Repository\Interface\IPharmaRepository;
use App\Http\Requests\CreatePharma;


class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pharmacies = Pharmacy::all();

        return view('pharmacies.showpharmacy', ['pharmacies' => $pharmacies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    protected $pharmaRepository;

    public function __construct(IPharmaRepository $pharmaRepository){
        $this->pharmaRepository = $pharmaRepository;
    }
    public function create(CreatePharma $createpharma){

        $pharmaDTO = PharmaDTO::from($createpharma->all());
        $pharma = $this->pharmaRepository->createpharma($pharmaDTO);
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pharmacy::create([
            'treatment' => $request->treatment,
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
        $pharmacy = Pharmacy::findOrFail($id);
        return view('pharmacies.editpharmacy', ['pharmacy' => $pharmacy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pharmacy = Pharmacy::findOrFail($id);
        $pharmacy->update([
            'treatment' => $request->treatment,
        ]);

        return redirect()->route('pharmacy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pharmacy = Pharmacy::findOrFail($id);
        $pharmacy->delete();
        return redirect()->back();
    }
}
