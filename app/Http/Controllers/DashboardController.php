<?php

namespace App\Http\Controllers;

use App\Models\FlightMeal;
use App\Models\MealStorage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // $dayName = Carbon::now()->format('l');
        // dd($dayName);
        
       
        
        return view('admin.index', get_defined_vars());
    }
}
