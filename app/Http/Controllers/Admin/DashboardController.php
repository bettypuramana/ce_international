<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers;
use Carbon\Carbon; 

class DashboardController extends Controller
{
    public function index()
    {
        $career=Careers::orderBy('id', 'DESC')->limit(6)->get();
        $totalCareers = $career->count();
        $todayCareers = Careers::whereDate('created_at', Carbon::today())->count();

        return view('admin.home', compact('career', 'totalCareers', 'todayCareers'));
    }
}
