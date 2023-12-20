<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $registrationData = $request->all();
        $str = Str::random(32);

        $validate = Validator::make($registrationData, [
            'nama_user' => 'required|max:60',
            'email' => 'required|email:rfc,dns|unique:users',
            'tanggal_lahir' => 'required',
            'password' => 'required|confirmed|min:3',
            'no_telp' => 'required',
        ]);

        if ($validate->fails()) {
            // return response(['message' => $validate->errors()->first()], 400);

            Session::flash('message', 'data tidak valid');
            return redirect('register');
        }

        $registrationData['password'] = bcrypt($request->password);

        $registrationData['verify_key'] = $str;
        $registrationData['active'] = -1;

        $user = User::create([
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'password' => Hash::make($request->password),
            'no_telp' => $request->no_telp,
            'role' => 'user',
            'verify_key' => $str,
            'active' => -1,
        ]);

        $details = [
            'nama_user' => $request->nama_user,
            'username' => $request->username,
            'website' => 'FEST fest',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('message', 'Link verifikasi telah dikirim ke email anda. Silahkan cek email anda untuk mengaktifkan akun.');

        return redirect('register');
        // return response([
        //     'message' => 'Register Success',
        //     'user' => $user
        // ], 200);
    }

    public function verify($verify_key)
    {

        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
                ->update([
                    'active' => 1,
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);

            return "Verifikasi Berhasil. Akun Anda Sudah Aktif.";
        } else {
            return "Keys Tidak Valid";
        }
    }

    public function login(Request $request)
    {
        $loginData = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $validate = Validator::make($loginData, [
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:3',
        ]);

        if ($validate->fails()) {
            return response(['message' => $validate->errors()->first()], 400);
        }

        if (!Auth::attempt($loginData)) {
            // return response(['message' => 'Invalid email & password match'], 401);
            Session::flash('error', 'Email atau password salah');
            return redirect('/login');
        }

        /** @var \App\Models\MyUserModel $user **/
        $user = Auth::user();

        if ($user->active) {
            return redirect('/home');
        } else {
            Auth::logout();
            Session::flash('error', 'Akun Anda belum diverifikasi. Silakan cek email Anda.');
            return redirect('/login');
        }

        // $token = $user->createToken('Authentication Token')->accessToken;

        // return response([
        //     'message' => 'Authenticated',
        //     'user' => $user,
        //     'token_type' => 'Bearer',
        //     'access_token' => $token
        // ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response([
            'message' => 'Logged out'
        ]);
    }
}
