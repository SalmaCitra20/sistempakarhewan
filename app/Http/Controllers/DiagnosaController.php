<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnosa = Diagnosa::all();
        return view('diagnosa.index', compact('diagnosa'));
    }
/**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $diagnosa = Diagnosa::findOrFail($id);
    //     return view('diagnosa.edit')->with('diagnosa', $diagnosa);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     $data = $this->validate($request, [
    //         'nama'=>'string|required',
    //         'deskripsi'=>'string|nullable',
    //         'kondisi'=>'string|required',
    //         'jumlah'=>'integer|required'
    //     ]);
    //         $b = Diagnosa::findOrFail($id);
    //         $b->update($data);
    //     return redirect(route('diagnosa.index'));
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diagnosa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'nama'=>'string|required',
            'detail'=>'string|required',
            'saran'=>'string|required'
            
        ]);

        Diagnosa::create($data);
        return redirect(route('diagnosa.index'));
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
        $diagnosa =  Diagnosa::where('id', $id)->first();
        return view('diagnosa.edit')->with('diagnosa', $diagnosa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $this->validate($request, [
            'id' => 'string|required',
            'nama' => 'string|required',
            'detail' => 'string|required',
            'saran' => 'string|required',

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $diagnosa = Diagnosa::where('id', $id)->firstorfail()->delete();
          echo ("User Record deleted successfully.");
          return redirect()->route('diagnosa.index');

          
    }
}