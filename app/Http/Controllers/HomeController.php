<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Song;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $songs = Song::with(['artist', 'album'])
//            ->where('user_id', \Auth::user()->id)
//            ->get();
//        $songs->sortBy(function($song) {
//           return $song->artist->name;
//        });

        $artists = Artist::with(['songs' => function($q) {
            $q->where('user_id', \Auth::user()->id)->orderBy('title')->with(['album']);
        }])->orderBy('name')->get();

        return view('home', compact('artists'));
    }

    public function create()
    {
        $artists = Artist::where('user_id', \Auth::user()->id)->get()->pluck('name', 'id');
        $albums =   Album::where('user_id', \Auth::user()->id)->get()->pluck('title', 'id');
        return view('create-song', compact('artists', 'albums'));
    }

    public function store(Request $request)
    {
        if($request->artist) {
            $artist = Artist::create(['user_id' => \Auth::user()->id, 'name' => $request->artist]);
        } else {
            $artist = Artist::find($request->artist_id);
        }

        if($request->album) {
            $album = Album::create(['user_id' => \Auth::user()->id, 'title' => $request->album, 'artist_id' => $artist->id]);
        } else {
            $album = Artist::find($request->album_id);
        }

        Song::create([
            'title' => $request->title,
            'album_id' => $album->id,
            'artist_id' => $artist->id,
            'user_id' => \Auth::user()->id
            ]);
        return redirect('/home');
    }
}
