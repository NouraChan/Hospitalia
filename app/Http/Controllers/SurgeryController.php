<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surgery;
use App\DTO\SurgeryDTO;
use App\Repository\Interface\ISurgeryRepository;
use App\Http\Requests\CreateSurgery;


class SurgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surgeries = Surgery::all();

        return view('surgeries.showsurgery', ['surgeries' => $surgeries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    protected $surgeryRepository;

    public function __construct(ISurgeryRepository $surgeryRepository){
        $this->surgeryRepository = $surgeryRepository;
    }
    public function create(CreateSurgery $createsurgery){

        $surgeryDTO = SurgeryDTO::from($createsurgery->all());
        $surgery = $this->surgeryRepository->createsurgery($surgeryDTO);

        return view('surgeries.createsurgery');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Surgery::create([
            'time' => $request->time,
            'name' => $request->name,

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
        $surgery = Surgery::findOrFail($id);
        return view('surgeries.editsurgery', ['surgery' => $surgery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $surgery = Surgery::findOrFail($id);
        $surgery->update([
            'time' => $request->time,
            'name' => $request->name,

        ]);

        return redirect()->route('surgery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $surgery = Surgery::findOrFail($id);
        $surgery->delete();
        return redirect()->back();
    }
}
