<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Souvenir;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class SouvenirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $souvenir = Souvenir::all();
            // return response()->json([
            //     'success' => true,
            //     'message' => 'List Semua Souvenir',
            //     'data'    => $souvenir  
            // ], 200);

            return view('souvenir.index', compact('souvenir'));
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Souvenir Tidak Ditemukan',
            //     'data'    => $e->getMessage(),
            // ], 404);

            return view('souvenir.index', compact('souvenir'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
                'jenis' => 'required',
                'gambar' => 'required|mimes:jpeg,png',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Semua Kolom Wajib Diisi!',
                    'data'    => $validator->errors()
                ], 401);
            }

            $image = $request->file('gambar');
            $imageName = $image->getClientOriginalName();
            $destinationPath = ('images/');
            $image->move($destinationPath, $imageName); 
            $destinationPath = 'images/'.$imageName;

            $souvenir = Souvenir::create([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'jenis' => $request->jenis,
                'gambar' => $destinationPath,
            ]);

            if ($souvenir) {
                // return response()->json([
                //     'success' => true,
                //     'message' => 'Souvenir Berhasil Ditambahkan!',
                //     'data'    => $souvenir  
                // ], 201);

                return redirect()->route('souvenir.index')->with('success', 'Souvenir berhasil ditambahkan');
            } else {
                // return response()->json([
                //     'success' => false,
                //     'message' => 'Souvenir Gagal Ditambahkan!',
                // ], 400);

                return redirect()->route('souvenir.index')->with('failed', 'Souvenir gagal ditambahkan');
            }
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Souvenir Gagal Ditambahkan!',
            //     'data'    => $e->getMessage(),
            // ], 500);

            return redirect()->route('souvenir.index')->with('failed', 'Souvenir gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $souvenir = Souvenir::where('id', $id)->first();
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Detail Souvenir!',
            //     'data'    => $souvenir  
            // ], 200);

            return view('souvenir.show', compact('souvenir'));
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Souvenir Tidak Ditemukan!',
            //     'data'    => $e->getMessage(),
            // ], 404);

            return view('souvenir.show', compact('souvenir'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
                'jenis' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Semua Kolom Wajib Diisi!',
                    'data'    => $validator->errors()
                ], 401);
            }

            $souvenir = Souvenir::where('id', $id)->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'jenis' => $request->jenis,
            ]);

            if ($souvenir) {
                // return response()->json([
                //     'success' => true,
                //     'message' => 'Souvenir Berhasil Diupdate!',
                //     'data'    => $souvenir  
                // ], 201);

                return redirect()->route('souvenir.index')->with('success', 'Souvenir berhasil diupdate');
            } else {
                // return response()->json([
                //     'success' => false,
                //     'message' => 'Souvenir Gagal Diupdate!',
                // ], 400);

                return redirect()->route('souvenir.index')->with('failed', 'Souvenir gagal diupdate');
            }
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Souvenir Gagal Diupdate!',
            //     'data'    => $e->getMessage(),
            // ], 500);

            return redirect()->route('souvenir.index')->with('failed', 'Souvenir gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $souvenir = Souvenir::where('id', $id)->delete();

            try {
                Storage::delete($souvenir->gambar);
            } catch (\Exception $e) {
                return $e->getMessage();
            }

            return response()->json([
                'success' => true,
                'message' => 'Souvenir Berhasil Dihapus!',
                'data'    => $souvenir  
            ], 200);

            // return redirect()->route('souvenir.index')->with('success', 'Souvenir berhasil dihapus');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Souvenir Gagal Dihapus!',
                'data'    => $e->getMessage(),
            ], 500);

            // return redirect()->route('souvenir.index')->with('failed', 'Souvenir gagal dihapus');
        }
    }

    // Flow Data Testing
    public function fetchAllSouvenir()
    {
        try{
            $souvenir = Souvenir::all();
            return response()->json([
                'success' => true,
                'message' => 'List Semua Souvenir',
                'data'    => $souvenir  
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Souvenir Tidak Ditemukan',
                'data'    => $e->getMessage(),
            ], 404);
        }
    }
}
