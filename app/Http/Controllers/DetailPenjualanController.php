<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailPenjualan;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barcode = $request->input('id_barang');
        $scan = Barang::where('barcode', $barcode)->first();

        if ($scan) {

            $qty = $request->input('qty');

            for ($i = 0; $i < $qty; $i++) {

                DetailPenjualan::create([
                    'nobon' => $request->nobon,
                    'id_barang' => $scan->id,
                    'harga' => $scan->harga,
                    'jumlah' => 0,

                ]);
            }
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Barang not found');
        }
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
    public function destroy(string $id_barang, $nobon)
    {
        $detail = DetailPenjualan::where('nobon', $nobon)
            ->where('id_barang', $id_barang);

        // Check if the detail exists, then delete it
        if ($detail) {
            $detail->delete();
            return redirect()->back()->with('success', 'Item deleted successfully');
        } else {
            return redirect('/');
        }
    }
}
