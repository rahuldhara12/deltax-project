<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
       $data['artists'] =  Artist::paginate(10);
       $data['songs'] =  Song::paginate(10);
        return view('index',$data);
    }

    public function addNewSongs()
    {
        $artists = Artist::get();
        return view('addsons', compact('artists'));
    }

    public function uploadSongs(Request $request)
    {
  
      // dd( $request->all());
      $song = $request->except(['artwork']);
        $imagefullname = '';
        if ($request->hasFile('artwork')) {
            $image = $request->file('artwork');
            $imgname = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            $imagefullname = $image->move('artImage', $imgname);
            //storePubliclyAs
        }

        $song['artwork'] =$imgname;
        //dd($song);
        $insert_song = Song::create($song);

        if($insert_song){
            $request->session()->flash('msg', 'song inserted successfully');
            return redirect('home');
        }else{
            $request->session()->flash('msg', 'Insertion Failed');
            return redirect('home');

        }
       
    }
    public function uploadArtists(Request $request)
    {
  
    //    dd( $request->all());
    $newAritsts = Artist::create($request->all());
    $request->session()->flash('message', 'Artist inserted successfully');
    return redirect('home');
       
    }
    
    
}
