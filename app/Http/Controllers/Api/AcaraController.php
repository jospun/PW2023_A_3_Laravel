<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Acara;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $acara = Acara::all();
            return view('admin.adminAcaraPage', compact('acara'));
    }

    public function showHome()
    {
            $event = Acara::inRandomOrder()->take(5)->get();
            return view('homePage', compact('event'));
    }

    public function showNav()
    {
            $event = Acara::inRandomOrder()->take(5)->get();
            return view('navbar.navbarHome', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'nama_acara' => 'required',
                'deskripsi' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_tutup' => 'required',
                'biaya' => 'required',
                'poster' => 'required|mimes:jpeg,png',
            ]);

            if($validator->fails()){
                return response()->json([
                    'message' => 'Validasi gagal',
                    'data' => $validator->errors()
                ], 400);
            }

            $image = $request->file('poster');
            $imageName = $image->getClientOriginalName();
            $destinationPath = ('images/');
            $image->move($destinationPath, $imageName); 
            $destinationPath = 'images/'.$imageName;

            Acara::create([
                'nama_acara' => $request->nama_acara,
                'deskripsi' => $request->deskripsi,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_tutup' => $request->tanggal_tutup,
                'biaya' => $request->biaya,
                'poster' => $destinationPath,
            ]);

            // return response()->json([
            //     'message' => 'Acara berhasil ditambahkan',
            //     'data' => $request->all()
            // ], 200);

            return redirect()->route('acara.index')->with('success', 'Acara berhasil ditambahkan');
        }catch(\Exception $e){
            // return response()->json([
            //     'message' => 'Acara gagal ditambahkan',
            //     'data' => $e->getMessage(),
            // ], 400);

            return redirect()->route('acara.index')->with('error', 'Acara gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $acara = Acara::find($id);

            return response()->json([
                'message' => 'Fetch Acara Success',
                'data' => $acara
            ], 200);

            // return view('acara.show', compact('acara'));
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Fetch Acara Failed',
                'data' => $e->getMessage(),
            ], 400);

            // return redirect()->route('acara.index')->with('error', 'Acara tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $validator = Validator::make($request->all(), [
                'nama_acara' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_tutup' => 'required',
                'biaya' => 'required',
            ]);

            if($validator->fails()){
                return response()->json([
                    'message' => 'Validasi gagal',
                    'data' => $validator->errors()
                ], 400);
            }

            $acara = Acara::find($id);

            if(!$acara){
                return response()->json([
                    'message' => 'Acara tidak ditemukan',
                    'data' => null
                ], 404);
            }

            $acara->update([
                'nama_acara' => $request->nama_acara,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_tutup' => $request->tanggal_tutup,
                'biaya' => $request->biaya,
            ]);

            // return response()->json([
            //     'message' => 'Acara berhasil diupdate',
            //     'data' => $acara
            // ], 200);

            return back()->with('success', 'Acara Berhasil diupdate');
        } catch(\Exception $e){
            // return response()->json([
            //     'message' => 'Acara gagal diupdate',
            //     'data' => $e->getMessage(),
            // ], 400);

            return back()->with('error', 'Acara gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $acara = Acara::find($id);

            if(!$acara){
                return response()->json([
                    'message' => 'Acara tidak ditemukan',
                    'data' => null
                ], 404);
            }

            $acara->delete();

            // return response()->json([
            //     'message' => 'Acara berhasil dihapus',
            //     'data' => $acara
            // ], 200);

            return back()->with('success', 'Acara Berhasil dihapus');
        } catch(\Exception $e){

            // return response()->json([
            //     'message' => 'Acara gagal dihapus',
            //     'data' => $e->getMessage(),
            // ], 400);

            return back()->with('error', 'Acara gagal dihapus');
        }
    }

    public function fetchAllAcara()
    {
        try{
            $acara = Acara::all();
            return response()->json([
                'message' => 'Fetch All Acara Success',
                'data' => $acara
            ], 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Fetch All Acara Failed',
                'data' => $e->getMessage(),
            ], 400);
        }
    }
}
