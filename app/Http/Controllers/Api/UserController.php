<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function fetchAllUser()
    {
        $user = User::all();
        // return response()->json([
        //     'message' => 'success',
        //     'data' => $user
        // ]);

        return view('admin.adminUserPage', compact('user'));
    }

    public function deleteUserById($id)
    {

        try{
            $user = User::find($id);

            if(!$user){
                // return response()->json([
                //     'message' => 'failed',
                //     'data' => 'User tidak ditemukan'
                // ]);
                return back()->with('failed', 'User tidak ditemukan');
            }

            $user->delete();
            return back()->with('success', 'User Berhasil dihilangkan');
        }catch(\Exception $e){
            // return response()->json([
            //     'message' => 'failed',
            //     'data' => $e->getMessage()
            // ]);

            return back()->with('failed', 'User Gagal dihilangkan');
        }
    }

    public function updateUserById(Request $request, $id)
    {
        try{
            $user = User::find($id);

            if(!$user){
                // return response()->json([
                //     'message' => 'failed',
                //     'data' => 'User tidak ditemukan'
                // ]);
                return back()->with('failed', 'User tidak ditemukan');
            }

            $user->update([
                'nama_user' => $request->nama_user,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'tanggal_lahir' => $request->tanggal_lahir,
            ]);

            $user->save();

            return back()->with('success', 'User Berhasil diupdate');
        }catch(\Exception $e){
            // return response()->json([
            //     'message' => 'failed',
            //     'data' => $e->getMessage()
            // ]);

            // return back()->with('failed', 'User Gagal diupdate');
        }
    }

    public function getUserByAuth()
    {
        $user = Auth::user();
        // return response()->json([
        //     'message' => 'success',
        //     'data' => $user
        // ]);

        return view('user.userProfile', compact('user'));
    }
}