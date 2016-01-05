<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function gallery()
    {
        $photos = Photo::all();

        return view('gallery', compact('photos'));
    }
    public function xml()
    {
        $photos = Photo::all();

        return view('xml', compact('photos'));
    }
}
