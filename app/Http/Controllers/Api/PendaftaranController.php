<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Pendaftaran;
use Illuminate\Support\Carbon;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $pendaftaran = Pendaftaran::all();
            // return response()->json([
            //     'success' => true,
            //     'message' => 'List Semua Pendaftaran',
            //     'data' => $pendaftaran
            // ], 200);

            return view('admin.adminAcaraPage', compact('pendaftaran'));
        } catch(\Exception $e){
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Pendaftaran Tidak Ditemukan',
            //     'data' => $e->getMessage(),
            // ], 400);

            return view('admin.adminAcaraPage', compact('pendaftaran'));
        }
    }

    public function showPendaftarbyAcara($id)
    {
        try{
            $pendaftaran = Pendaftaran::join(
                'acaras', 'acaras.id' ,'=', 'pendaftarans.id_acara' 
            );

            
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Fetch Acara Failed',
                'data' => $e->getMessage(),
            ], 400);

            // return redirect()->route('acara.index')->with('error', 'Acara tidak ditemukan');
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
            ]);


            if($validator->fails()){
                return response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'data' => $validator->errors()
                ], 400);

                // return redirect()->back()->with('error', 'Validasi gagal');
            }

            $pendaftaran = [
                'id_user' => Auth::user()->id,
                'id_acara' => $request->id_acara,
                'status' => "Belum Membayar",
                'tanggal_bayar' => Carbon::now(),
            ];

            Pendaftaran::create([
                'id_user' => Auth::user()->id,
                'id_acara' => $request->id_acara,
                'status' => 'Sudah Membayar',
                'tanggal_bayar' => Carbon::now(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran Berhasil Ditambahkan',
                'data' => $pendaftaran
            ], 200);

            // return redirect()->back()->with('success', 'Pendaftaran Berhasil Ditambahkan');
        } catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran Gagal Ditambahkan',
                'data' => $e->getMessage(),
            ], 400);

            // return redirect()->back()->with('error', 'Pendaftaran Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $pendaftaran = Pendaftaran::find($id);

            // return response()->json([
            //     'success' => true,
            //     'message' => 'Pendaftaran Berhasil Ditemukan',
            //     'data' => $pendaftaran
            // ], 200);

            return view('pendaftaran.show', compact('pendaftaran'));
        } catch(\Exception $e){
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Pendaftaran Tidak Ditemukan',
            //     'data' => $e->getMessage(),
            // ], 400);

            return redirect()->route('pendaftaran.index')->with('error', 'Pendaftaran Tidak Ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $pendaftaran = Pendaftaran::find($id);

            $validator = Validator::make($request->all(), [
                'id_acara' => 'required',
            ]);

            if($validator->fails()){
                return response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'data' => $validator->errors()
                ], 400);

                // return redirect()->back()->with('error', 'Validasi gagal');
            }

            $pendaftaran->update([
                'id_user' => Auth::user()->id,
                'id_acara' => $request->id_acara,
                'status' => "Belum Membayar",
                'tanggal_bayar' => Carbon::now(),
            ]);

            // return response()->json([
            //     'success' => true,
            //     'message' => 'Pendaftaran Berhasil Diupdate',
            //     'data' => $pendaftaran
            // ], 200);

            return redirect()->back()->with('success', 'Pendaftaran Berhasil Diupdate');
        } catch(\Exception $e){
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Pendaftaran Gagal Diupdate',
            //     'data' => $e->getMessage(),
            // ], 400);

            return redirect()->back()->with('error', 'Pendaftaran Gagal Diupdate');
        }
    }

    public function showHomeAdmin()
    {
            $event = Pendaftaran::join(
                'users', 'users.id', '=', 'pendaftarans.id_user'
                )->where(
                'status' ,'=','Belum Lunas'
            )->take(4)->get();
            return view('admin.adminHomePage', compact('event'));
    }

    public function verifBayar($id)
    {
        try{
            $pendaftaran = Pendaftaran::find($id);

            print($pendaftaran->status);
            $pendaftaran->status = "Lunas";
            $pendaftaran->save();

            return back()->with('success', 'Pendaftaran Berhasil diverifikasi');
        } catch(\Exception $e){
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Pendaftaran Gagal Diupdate',
            //     'data' => $e->getMessage(),
            // ], 400);

            return redirect()->back()->with('error', 'Pendaftaran Gagal Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusPendaftaran($id)
    {
        try{
            $pendaftaran = Pendaftaran::find($id);

            $pendaftaran->delete();

            // return response()->json([
            //     'success' => true,
            //     'message' => 'Pendaftaran Berhasil Dihapus',
            //     'data' => $pendaftaran
            // ], 200);

            return redirect('/adminac');
        } catch(\Exception $e){
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Pendaftaran Gagal Dihapus',
            //     'data' => $e->getMessage(),
            // ], 400);

            return back()->with('error', 'Pendaftaran Gagal Dihapus');
        }
    }

    public function fetchAllPendaftaran()
    {
        try{
            $pendaftaran = Pendaftaran::all();

            return response()->json([
                'success' => true,
                'message' => 'List Semua Pendaftaran',
                'data' => $pendaftaran
            ], 200);
        } catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran Tidak Ditemukan',
                'data' => $e->getMessage(),
            ], 400);
        }
    }

    public function getPendaftaranbyAcara($id){
        try{
            $pendaftaran = Pendaftaran::where('id_acara','=',$id);
            return view('admin.adminAcaraPage', compact('pendaftaran'));
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran Tidak Ditemukan',
                'data' => $e->getMessage(),
            ], 400);
        }
    }
}
