<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $transaksi = Transaksi::all();
            // return response()->json([
            //     'success' => true,
            //     'message' => 'List Data Transaksi',
            //     'data' => $transaksi
            // ], 200);

            return view('transaksi.index', compact('transaksi'));
        } catch (\Exception $e){
            // return response()->json([
            //     'success' => true,
            //     'message' => 'List Data Transaksi',
            //     'data' => $e->getMessage()
            // ], 200);

            return view('transaksi.index', compact('transaksi'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [

            ]);

            if($validator->fails()){
                // return response()->json([
                //     'success' => false,
                //     'message' => 'Validasi gagal',
                //     'data' => $validator->errors()
                // ], 400);

                return redirect()->back()->with('error', 'Validasi gagal');
            }

            $transaksi = [
                'id_user' => Auth::user()->id,
                'total' => 0,
                'status' => "Belum Lunas",
            ];

            Transaksi::create($transaksi);

            // return response()->json([
            //     'success' => true,
            //     'message' => 'Transaksi Berhasil Ditambahkan',
            //     'data' => $transaksi,
            // ]);

            return redirect()->back()->with('success', 'Pendaftaran Berhasil Ditambahkan');

        } catch (\Exception $e){
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Transaksi Gagal Ditambahkan',
            //     'data' => $e->getMessage(),
            // ], 400);

            return redirect()->back()->with('error', 'Pendaftaran Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $transaksi = Transaksi::find($id);
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Transaksi',
                'data' => $transaksi
            ], 200);

            // return view('transaksi.show', compact('transaksi'));
        } catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Detail Data Transaksi',
                'data' => $e->getMessage()
            ], 200);

            // return view('transaksi.show', compact('transaksi'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $transaksi = Transaksi::find($id);
            
            if(!$transaksi){
                return response()->json([
                    'success' => false,
                    'message' => 'Tidak ditemukan',
                    'data' => ''
                ]);
            }

            $transaksi->delete();

            // return response()->json([
            //     'success' => true,
            //     'message' => 'Transaksi Berhasil Dihapus',
            //     'data' => $transaksi
            // ], 200);

            return redirect()->back()->with('success', 'Transaksi Berhasil Dihapus');

        } catch (\Exception $e){
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Detail Data Transaksi',
            //     'data' => $e->getMessage()
            // ], 200);

            return redirect()->back()->with('false', 'Transaksi Tidak Berhasil Dihapus');
        }
    }
}
