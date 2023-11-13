<?php

namespace App\Http\Controllers;
use App\Models\infoArticle;
use App\Models\dateArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class infoController extends Controller
{
    public function index(){
        return view ('web.index');
    }

    public function availability(){
        $rooms = DB::table('rooms')->get();
        return view ('web.availability',['rooms'=> $rooms]);
    }

    public function accommodations(){
        return view ('web.accommodations');
    }

    public function contacts(){
        return view ('web.contacts');
    }

    public function events(){
        return view ('web.events');
    }

    public function faqs(){
        return view ('web.faqs');
    }
    
    public function form(){
        return view ('web.form');
    }

    public function booknow(){
        return view ('web.booknow');
    }
    

    public function create(Request $request){
        $request->validate([
            'fName' => 'required|string|min:3',
            'lName' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
           ]);

        $article = new infoArticle();
        $article->fName = $request->input('fName');
        $article->lName = $request->input('lName');
        $article->email = $request->input('email');
        $article->contact = $request->input('contact');
        $article->address = $request->input('address');
        $article->save();
        
        // dd($request->all());

    }

    public function date(Request $request){
        $request->validate([
            'checkIn' => 'required',
            'checkOut' => 'required',
            'noRoom' => 'required',
            'adult' => 'required',
            'children' => 'required',
           ]);
    
        $date = new dateArticle();
        $date->checkIn = $request->input('checkIn');
        $date->checkOut = $request->input('checkOut');
        $date->noRoom = $request->input('noRoom');
        $date->adult = $request->input('adult');
        $date->children = $request->input('children');
        $date->save();

        return redirect('availability');
  
    }
}
