<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::orderBy('id', 'desc')->get();
        return view('home.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Penjualan::create([
            'id_user' => Auth::user()->id,
            'status' => 'Belum Selesai',
        ]);

        return redirect()->back();
    }

    public function transaksi($id)
    {
        $nobon = Penjualan::find($id);
        $detailpenjualan = DetailPenjualan::where('nobon', $id)
            ->select('id_barang', 'nobon', 'harga', DB::raw('count(*) as total'))
            ->groupBy('id_barang', 'nobon', 'harga')  // Include other columns you want to group by
            ->get();

        $barangCounts = $detailpenjualan->pluck('total', 'id_barang');

        return view('home.penjualan.tambah', compact('detailpenjualan', 'barangCounts', 'nobon'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
