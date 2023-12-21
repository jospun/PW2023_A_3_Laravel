<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;;
use App\Models\Acara;
use App\Models\Souvenir;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showHome()
    {
        $currentDate = Carbon::now(); 
        $souvenirs = Souvenir::latest()->take(5)->get();
        $event = Acara::where('tanggal_mulai', '>=', $currentDate)->latest()->take(5)->get();
        if($event->count() < 5){
            $latestEvents = Acara::latest()->take(5 - $event->count())->get();
            $event = $event->merge($latestEvents);
        }

        return view('homePage', compact('event','souvenirs'));
    }

}
