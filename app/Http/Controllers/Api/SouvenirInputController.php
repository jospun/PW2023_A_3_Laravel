<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Detail_trans;
use App\Models\Souvenir;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class SouvenirinputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_souvenir' => 'required',
            'jumlah' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Validasi gagal',
                'data' => $validator->errors()
            ], 400);
        }

        $souve = Souvenir::find($request->id_souvenir);

        if(!$souve){
            return response()->json([
                'success' => false,
                'message' => 'Souvenir Tidak Ditemukan',
                'data' => null
            ], 400);
        }

        $transaksi = Transaksi::create([
            'id_user' => auth()->user()->id,
            'status' => 'Sudah Membayar',
            'total' => $request->jumlah * $souve->harga,
        ]);

        $trans = Transaksi::find($transaksi->id);

        if(!$trans){
            return response()->json([
                'success' => false,
                'message' => 'Transaksi Tidak Ditemukan',
                'data' => null
            ], 400);
        }

        Detail_trans::create([
            'id_item' => $request->id_souvenir,
            'id_transaksi' => $trans->id,
            'jumlah' => $request->jumlah,
            'subtotal' => $request->jumlah * $souve->harga,
        ]);

        return back()->with('success', 'Transaksi Berhasil ditambahkan');
    }

    public function show(Detail_trans $detail_trans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail_trans $detail_trans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail_trans $detail_trans)
    {
        //
    }
}
