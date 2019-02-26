<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ApiSongsController extends Controller
{
    public function index() {
        $artists = Artist::with(['songs' => function($q) {
            $q->where('user_id', \Auth::user()->id)->orderBy('title')->with(['album']);
        }])->orderBy('name')->get();

        return $artists;
    }
}
