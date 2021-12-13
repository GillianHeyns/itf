<?php

namespace App\Http\Controllers;

use App\Testimony;
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
        $testimonies = Testimony::with(['photos', 'testimony_tags' => function ($query) {
            $query
                ->join('tags', 'testimony_tags.tag_id', '=', 'tags.id');
        }])
            ->where('homepage', true)
            ->get();
        return view('home', ['testimonies' => $testimonies]);
    }

    public function index_en()
    {
        $testimonies = Testimony::with(['photos', 'testimony_tags' => function ($query) {
            $query
                ->join('tags', 'testimony_tags.tag_id', '=', 'tags.id');
        }])
            ->where('homepage_EN', true)
            ->get();
        return view('acs', ['testimonies' => $testimonies]);
    }
}
