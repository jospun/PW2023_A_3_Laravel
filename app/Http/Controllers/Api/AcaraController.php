<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Acara;
use App\Models\Gueststar;
use Carbon\Carbon;  

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

    public function showInSouvenir()
    {
            $acara = Acara::all();
            return view('admin.souvenirAdmin', compact('acara'));
    }

    public function showAcaraSouve()
    {
            $acara = Acara::all();
            return view('user.souvenirPage', compact('acara'));
    }

    public function showGuest()
    {
            $acara = Acara::all();
            return view('admin.adminGuestPage', compact('acara'));
    }
  
    public function showNav()
    {
        $currentDate = Carbon::now();
        $event = Acara::where('tanggal_mulai', '>=', $currentDate)->latest()->take(5)->get();
        if($event->count() < 5){
            $latestEvents = Acara::latest()->take(5 - $event->count())->get();
            $event = $event->merge($latestEvents);
        }
        return view('navbar.navbarHome', compact('event'));
    }

    public function showNavUser()
    {
        $currentDate = Carbon::now();
        $acara = Acara::where('tanggal_mulai', '>=', $currentDate)->latest()->take(5)->get();
        if($acara->count() < 5){
            $latestEvents = Acara::latest()->take(5 - $acara->count())->get();
            $event = $acara->merge($latestEvents);
        }
        return view('navbar.navbarUser', compact('acara'));
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
                'poster' => 'required|mimes:jpg,jpeg,png,mov,mp4',
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

            return back()->with('success', 'Acara Berhasil ditambahkan');
        }catch(\Exception $e){
            // return response()->json([
            //     'message' => 'Acara gagal ditambahkan',
            //     'data' => $e->getMessage(),
            // ], 400);

            return back()->with('error', 'Acara gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $acara = Acara::find($id);
            $performer = Gueststar::where('id_acara', $id)->get();

//             return response()->json([
//                 'message' => 'Fetch Acara Success',
//                 'data' => $acara
//             ], 200);
            
  
        return view('user/pendaftaranAcara', compact('acara', 'performer'));
  
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Fetch Acara Failed',
                'data' => $e->getMessage(),
            ], 400);

            // return redirect()->route('acara.index')->with('error', 'Acara tidak ditemukan');
        }
    }

    

    public function edit($id){
        $ac = Acara::find($id);
        return view('admin.adminAcaraPage', compact('ac'));
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
                'poster' => 'required|mimes:jpg,jpeg,png,mov,mp4',
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
                'poster' => $destinationPath,
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
