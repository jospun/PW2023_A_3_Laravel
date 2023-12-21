<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Detail_trans;
use App\Models\Transaksi;
use App\Models\Souvenir;

class DetailTransController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $detail = Detail_trans::all();
            // return response()->json([
            //     'success' => true,
            //     'message' => 'List Data detail',
            //     'data' => $detail
            // ]);

            return view('detail.index', compact('detail'));
        } catch (\Exception $e){
            // return response()->json([
            //     'success' => true,
            //     'message' => 'List Data detail',
            //     'data' => $e->getMessage()
            // ]);

            return view('detail.index', compact('detail'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try{
            $validator = Validator::make($request->all(), [
                'id_item' => 'required',
                'id_transaksi' => 'required',
                'jumlah' => 'required',
            ]);

            if($validator->fails()){
                return response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'data' => $validator->errors()
                ], 400);
                // return redirect()->back()->with('error', 'Validasi gagal');
            }

            $transaksi = Transaksi::find($request->id_transaksi);
            if(!$transaksi){
                return response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'data' => 'Transaksi tidak ditemukan'
                ], 400);

                // return redirect()->back()->with('error', 'Transaksi tidak ditemukan');
            }

            $souvenir = Souvenir::find($request->id_item);
            if(!$souvenir){
                return response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'data' => 'Souvenir tidak ditemukan'
                ], 400);

                // return redirect()->back()->with('error', 'Souvenir tidak ditemukan');
            }

            $subtotal = $request->jumlah * $souvenir->harga;

            $detail_trans = [
                'id_item' => $request->id_item,
                'id_transaksi' => $request->id_transaksi,
                'jumlah' => $request->jumlah,
                'subtotal' => $subtotal,
            ];

            Detail_trans::create($detail_trans);

            return response()->json([
                'success' => true,
                'message' => 'Detail Transaksi berhasil ditambahkan',
                'data' => $detail_trans,
            ]);

            // return redirect()->back()->with('success', 'Detail Transaksi berhasil ditambahkan');
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Detail Transaksi gagal ditambahkan',
                'data' => $e->getMessage(),
            ], 400);

            // return redirect()->back()->with('error', 'Detail Transaksi gagal ditambahkan');
        }        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $detail_trans = Detail_trans::find($id);
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Transaksi',
                'data' => $detail_trans
            ], 200);

            // return view('detail_trans.show', compact('transaksi'));
        } catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Detail Data Transaksi',
                'data' => $e->getMessage()
            ], 200);

            // return view('detail_trans.show', compact('transaksi'));
        }
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
    public function destroy($id)
    {
        try {
            $detailTrans = Detail_trans::find($id);
    
            if (!$detailTrans) {
                return redirect()->back()->with('error', 'Detail Transaksi Tidak Ditemukan');
            }
    
            $detailTrans->delete();
    
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Detail Transaksi Berhasil Dihapus',
            //     'data' => $detailTrans
            // ], 200);

            return redirect()->back()->with('success', 'Detail Transaksi Berhasil Dihapus');
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Detail Transaksi Tidak Berhasil Dihapus',
            //     'data' => $e->getMessage()
            // ], 200);

            return redirect()->back()->with('error', 'Detail Transaksi Tidak Berhasil Dihapus');
        }
    }
}
