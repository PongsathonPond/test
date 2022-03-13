<?php

namespace App\Http\Controllers;

use App\Models\bookingcar;
use App\Models\car;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bookingcarController extends Controller
{
    public function index()
    {
        $book = bookingcar::all();
        return view('page.admin.booking', compact('book'));
    }

    public function index2($id)
    {
        $book = car::find($id);
        return view('page.user.booking2', compact('book'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'start' => 'required|max:255',
            'end' => 'required|max:255',
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'car_id' => 'required|max:255',

        ],

        );

        $addcal = new bookingcar;
        $addcal->start = $request->start;
        $addcal->end = $request->end;
        $addcal->fname = $request->fname;
        $addcal->lname = $request->lname;

        $addcal->user_id = Auth::user()->id;

        $addcal->car_id = $request->car_id;

        $addcal->created_at = Carbon::now();

        $addcal->save();
        //อัพโหลดภาพไปไดเรกทอรี่

        return redirect()->back()->with('success', "บันทึกข้อมูลเรียบร้อย");

    }


    public function update(Request $request, $id)
    {

        $request->validate([

            'status' => 'required',
         

        ],

          
        );

    
        bookingcar::find($id)->update([
                'status' => $request->status,
               
            ]);

            //ลบภาพเก่าและอัพภาพใหม่
        
            return redirect()->back()->with('success', "อัพเดตข้อมูลเรียบร้อย");

        
        // return redirect()->route('usermanager')->with('success',"อัพเดตข้อมูลเรียบร้อย");
    }
}
