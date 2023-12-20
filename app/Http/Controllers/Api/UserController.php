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
        return response()->json([
            'message' => 'success',
            'data' => $user
        ]);
    }
}
