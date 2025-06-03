<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function careers()
    {
        return view('user.careers');
    }
    public function contact_us()
    {
        return view('user.contact');
    }
    public function expertise()
    {
        return view('user.expertise');
    }
    public function mining()
    {
        return view('user.mining');
    }
    public function store_career(Request $request)
    {
        $validated = $request->validate([
            
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'more' => 'required',
            'image' => 'required|mimes:pdf,png,jpg,jpeg|max:1024',            
            ],
            [
            'name.required' => 'This field is required',
            'email.required' => 'This field is required',
            'phone.required' => 'This field is required',
            'more.required' => 'This field is required', 
            'image.required' => 'This field is required',  
            ]
            
        );

        $insertCareer= new Careers;
        $insertCareer->name=$request->input('name');
        $insertCareer->email=$request->input('email');
        $insertCareer->phone=$request->input('phone');
        $insertCareer->more=$request->input('more');

        if ($request->file('image')!=null)
        {
        // echo "dasfafs";
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('assets/uploads/cv',$filename);
            $insertCareer->cv=$filename;
        }
        $save= $insertCareer->save();
        if($save){
            return redirect()->back()->with('success', 'Details sent successfully!!! We will connect you soon!!!');
        }
        else{
            return redirect()->back()->with('fail', 'Looks like an error please try again later!');
        }
    }
}
