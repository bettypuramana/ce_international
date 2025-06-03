<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Careers;
use Illuminate\Support\Facades\Auth;

class CareersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $career=Careers::orderBy('id', 'DESC')->get();
        return view('admin.career',compact('career'));
    }
     public function delete(Request $request, $id)
    {
        DB::table('careers')->where('id',$id)->delete();

        //return redirect()->route('career-list')->with('success', 'Career deleted successfully.');
        return redirect()->back()->with('success', 'Career deleted successfully.');
    }
}
