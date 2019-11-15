<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function menu(){
        return view('menu');
    }
    public function reservation(){
        return view('reservation');
    }
    public function galery(){
        return view('galery');
    }
    public function contact(){
        return view('galery');
    }

    public function sendemail(Request $request)
    {
        try{
            Mail::send('sendemail', 
            [   'name' => $request->name, 
                'email' => $request->email,
                'phone' => $request->phone,
                'sumpeople'=> $request->sumpeople,
                'date' => $request->date,
                'time' => $request->time

            ], 
            function ($message) use ($request)
            {
                $message->subject('Reservation');
                $message->from(
                    $request->email,$request->name
                );
                $message->to(
                    'foodgasmreservation@gmail.com'
                );
            });
            return back()->with('alert-success','Berhasil Kirim Email');
        }
        catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
}
