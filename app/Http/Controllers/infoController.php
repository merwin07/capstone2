<?php
#chaks
#nats
namespace App\Http\Controllers;
use App\Models\infoArticle;
use App\Models\dateArticle;
use App\Models\roomArticle;
use App\Models\roomArticles;
use App\Models\Reservations;
use App\Models\pickArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class infoController extends Controller
{
    public function index(){
        return view ('web.index');
    }

    public function availability(){
        $rooms = DB::table('rooms')->where('isAvailable', 0)->get();
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
        
        
    

        // $info_articles= DB::table('info_articles')
        // ->join('date_articles', 'info_articles.id', '=', 'date_articles.id')
        // ->join('room_articles', 'info_articles.id', '=', 'room_articles.id')
        // ->select('info_articles.*', 'date_articles.*','room_articles.*')
        // ->get();

        // $reservation= DB::table('room_articles')
        // ->join('date_articles', 'room_articles.id', '=', 'date_articles.id')
        // ->join('info_articles', 'room_articles.id', '=', 'info_articles.id')
        // ->join('rooms', 'room_articles.id', '=', 'rooms.id')
        // ->select('info_articles.fName','date_articles.checkIn' , 'date_articles.checkOut','date_articles.adult','date_articles.children','room_articles.*','rooms.Price')
        // ->get();

        $reservation= DB::table('rooms')
        ->join('date_articles', 'rooms.id', '=', 'date_articles.id')
        ->join('info_articles', 'rooms.id', '=', 'info_articles.id')
        ->join('room_articles', 'rooms.id', '=', 'room_articles.id')
        ->select('info_articles.*','date_articles.*','room_articles.*','rooms.*')
        ->get();
        // return dd($reservation);
        foreach ($reservation as $room_article) {
            $new_room = new Reservations();
            $new_room->name = $room_article->fName;
            $new_room->reservationNo = $room_article->id;
            $new_room->roomName = $room_article->roomName;
            $new_room->checkIn = $room_article->checkIn;
            $new_room->checkOut = $room_article->checkOut;
            $new_room->adult = $room_article->adult;
            $new_room->children = $room_article->children;
            $new_room->total = $room_article->Price;
            $new_room->save();
        }
      
        // // 
        // // DB::table('transaction')->insert($data->toArray());
        // // dd($data);

        // // $this->$room_info = $room_info;
        // // dd($request->all());

        
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


    public function room(Request $request){
        $request->validate([
            'roomName' => 'required',
           ]);
    
        
        $rooms = new roomArticle();
        $rooms->roomName = $request->input('roomName');
        $rooms->save();  


            return redirect('form');
      
        
  
    }
}
