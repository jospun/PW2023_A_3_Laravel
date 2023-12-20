<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Gueststar;

class GueststarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $gueststar = Gueststar::all();
            // return response()->json([
            //     'success' => true,
            //     'message' => 'List Semua Gueststar',
            //     'data'    => $gueststar  
            // ], 200);

            return view('gueststar.index', compact('gueststar'));
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Gueststar Tidak Ditemukan',
            //     'data'    => $e->getMessage(),
            // ], 404);

            return view('gueststar.index', compact('gueststar'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'id_acara' => 'required',
                'nama' => 'required',
                'deskripsi' => 'required',
                'foto' => 'required|mimes:jpeg,png',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Semua Kolom Wajib Diisi!',
                    'data'    => $validator->errors()
                ], 401);
            }

            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
            $destinationPath = ('images/');
            $image->move($destinationPath, $imageName); 
            $destinationPath = 'images/'.$imageName;

            $gueststar = Gueststar::create([
                'id_acara' => $request->id_acara,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $destinationPath,
            ]);

            // return response()->json([
            //     'success' => true,
            //     'message' => 'Gueststar Berhasil Ditambahkan!',
            //     'data'    => $gueststar  
            // ], 201);

            return back()->with('success', 'Guest Berhasil ditambahkan');
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Gueststar Gagal Ditambahkan!',
            //     'data'    => $e->getMessage(),
            // ], 409);

            return back()->with('error', 'Guest gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $gueststar = Gueststar::find($id);
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Detail Data Gueststar',
            //     'data'    => $gueststar 
            // ], 200);

            return view('gueststar.show', compact('gueststar'));
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Gueststar Tidak Ditemukan!',
            //     'data'    => $e->getMessage(),
            // ], 404);

            return view('gueststar.show', compact('gueststar'));
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
                'deskripsi' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Semua Kolom Wajib Diisi!',
                    'data'    => $validator->errors()
                ], 401);
            }

            $gueststar = Gueststar::where('id', $id)->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
            ]);

            // return response()->json([
            //     'success' => true,
            //     'message' => 'Gueststar Berhasil Diupdate!',
            //     'data'    => $gueststar  
            // ], 201);

            return redirect()->route('gueststar.index')->with('success', 'Gueststar Berhasil Diupdate!');
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Gueststar Gagal Diupdate!',
            //     'data'    => $e->getMessage(),
            // ], 409);

            return redirect()->route('gueststar.index')->with('error', 'Gueststar Gagal Diupdate!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $gueststar = Gueststar::where('id', $id)->delete();

            if(!$gueststar){
                return response()->json([
                    'success' => false,
                    'message' => 'Gueststar Tidak Ditemukan!',
                ], 404);
            }

            // return response()->json([
            //     'success' => true,
            //     'message' => 'Gueststar Berhasil Dihapus!',
            //     'data'    => $gueststar  
            // ], 201);

            return back()->with('success', 'Guest Berhasil dihapus');
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Gueststar Gagal Dihapus!',
            //     'data'    => $e->getMessage(),
            // ], 409);

            return back()->with('error', 'Guest gagal dihapus');
        }
    }

    public function showGueststarBasedOnIdAcara($id)
    {
        try{
            $gueststar = Gueststar::where('id_acara', $id)->get();
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Detail Data Gueststar Berdasarkan ID Acara',
            //     'data'    => $gueststar 
            // ], 200);

            // return view('gueststar.showGueststarBasedOnIdAcara', compact('gueststar'));
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Gueststar Tidak Ditemukan!',
            //     'data'    => $e->getMessage(),
            // ], 404);

            return view('gueststar.showGueststarBasedOnIdAcara', compact('gueststar'));
        }
    }

    public function fetchAllGueststar()
    {
        try{
            $gueststar = Gueststar::all();
            return response()->json([
                'success' => true,
                'message' => 'List Semua Gueststar',
                'data'    => $gueststar  
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gueststar Tidak Ditemukan',
                'data'    => $e->getMessage(),
            ], 404);
        }
    }

    
}
